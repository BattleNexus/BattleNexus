<?php namespace BattleNexus\User\Controllers;

use BattleNexus\User\Repositories\Eloquent\UserRepository;
use Cartalyst\Sentry\Sentry;
use Illuminate\Support\Facades\Redirect;

class UserController extends \BaseController {

	protected $sentry;

	public function __construct(Sentry $sentry)
	{
		$this->sentry = $sentry;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Response
	 */
	public function index()
	{
		// TODO: Do we really want a public member list?
		$this->layout->content = \View::make('users.index')->with('users', $this->sentry->findAllUsers());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Response
	 */
	public function create()
	{
		// TODO: Make GET /register alias to this
		$this->layout->content = \View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return \Response
	 */
	public function store()
	{
		// TODO: Make POST /register alias to this
		$input = \Input::query();

		$validator = \Validator::make($input, [
			'username' => 'required|unique:users,username',
			'email' => 'required|unique:users,email',
			'password' => 'confirmed',
		]);

		if ($validator->fails()) {
			return \Redirect::to('user.create')->withInput()->withErrors($validator->messages());
		}

		try {
			$user = $this->sentry->createUser([
				'username' => \Input::input('username'),
				'email'    => \Input::input('email'),
				'password' => \Input::input('password'),
				'ip_address' => $_SERVER['REMOTE_ADDR'],
			]);

			$user->addGroup($this->sentry->findGroupByName('Member'));

			\Event::fire('user.create', $user);
		} catch ( \Exception $e ) {
			\App::abort(500);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Response
	 */
	public function show($id)
	{
		$this->layout->content = \View::make('users.index')->with('user', $this->sentry->findUserById($id));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Response
	 */
	public function edit($id)
	{
		if ($this->sentry->getUser()->getId() != $id || !$this->sentry->getUser()->hasAccess('user.edit')) {
			\App::abort(403);
		}

		$this->layout->content = \View::make('users.edit')->with('user', $this->sentry->find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return \Response
	 */
	public function update($id)
	{
		if ($this->sentry->getUser()->getId() != $id || !$this->sentry->getUser()->hasAccess('user.edit')) {
			\App::abort(403);
		}

		$input = \Input::query();

		$validator = \Validator::make($input, [
			'username' => 'required',
			'email' => 'required|email',
			'password' => 'confirmed',
		]);

		if ($validator->fails()) {
			return \Redirect::route('user.edit', $id)->withInput()->withErrors($validator->messages());
		}

		return \Redirect::route('user.show', $id)->withInput()->with('message', 'Account successfully updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Response
	 */
	public function destroy($id)
	{
		if (!$this->sentry->getUser()->hasAccess('user.delete')) {
			\App::abort(403);
		}

		$this->sentry->findUserById($id)->delete();

		return \Redirect::home()->with('message', 'User was deleted successfully.');
	}

}
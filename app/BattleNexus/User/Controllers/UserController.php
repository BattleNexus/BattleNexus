<?php namespace BattleNexus\User\Controllers;

use BattleNexus\User\Repositories\Eloquent\UserRepository;
use Cartalyst\Sentry\Sentry;
use Cartalyst\Sentry\Throttling\UserBannedException;
use Cartalyst\Sentry\Throttling\UserSuspendedException;
use Cartalyst\Sentry\Users\UserNotFoundException;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class UserController extends \BaseController {

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
	 * Show the form for logging in
	 */
	public function login()
	{
		$this->layout->content = \View::make('users.login');
	}

	/**
	 * Authorize the user logging in
	 */
	public function authorize()
	{
		$input = \Input::input();

		$validator = \Validator::make($input, [
			'email' => 'required',
			'password' => 'required',
		]);

		if ($validator->fails()) {
			return \Redirect::route('user.login')->withInput()->withErrors($validator->messages());
		}

		try {
			$this->sentry->authenticate(['email' => \Input::input('email'), 'password' => \Input::input('password')], \Input::input('rememberme'));

			return \Redirect::intended('/');
		} catch (UserBannedException $e) {
			return \Redirect::route('user.login')->withErrors(['This account has been permanently banned.']);
		} catch (UserSuspendedException $e) {
			return \Redirect::route('user.login')->withErrors(['This account has been temporarily suspended.']);
		} catch (UserNotFoundException $e) {
			return \Redirect::route('user.login')->withErrors(['Welp, it seems like you\'ve given the wrong email or password. I can\'t seem to locate your user.'])->withInput();
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return \Response
	 */
	public function store()
	{
		$input = \Input::input();

		$validator = \Validator::make($input, [
			'username' => 'required|unique:users,username',
			'email' => 'required|unique:users,email',
			'password' => 'required|confirmed',
			'password_confirmation' => 'required',
			'tos' => 'accepted'
		]);

		if ($validator->fails()) {
			return \Redirect::route('user.create')->withInput()->withErrors($validator->messages());
		}

		$user = $this->sentry->createUser([
			'username' => \Input::input('username'),
			'email'    => \Input::input('email'),
			'password' => \Input::input('password'),
			'ip_address' => $_SERVER['REMOTE_ADDR'],
		]);

		$user->addGroup($this->sentry->findGroupByName('Member'));

		\Event::fire('user.store', $user);

		return \Redirect::to('/');
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
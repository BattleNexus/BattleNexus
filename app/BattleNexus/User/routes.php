<?php
// User Routes

Route::get('login', ['as' => 'user.login', 'uses' => 'BattleNexus\User\Controllers\UserController@login']);
Route::post('login', ['as' => 'user.authorize', 'uses' => 'BattleNexus\User\Controllers\UserController@authorize']);

Route::group(['prefix' => 'user'], function()
{
	Route::get('/', ['as' => 'user.index', 'uses' => 'BattleNexus\User\Controllers\UserController@index']);
	Route::post('/', ['as' => 'user.store', 'uses' => 'BattleNexus\User\Controllers\UserController@store']);
	Route::get('{id}', ['as' => 'user.show', 'uses' => 'BattleNexus\User\Controllers\UserController@show']);
	Route::get('{id}/edit', ['as' => 'user.edit', 'uses' => 'BattleNexus\User\Controllers\UserController@edit']);
	Route::patch('{id}', ['as' => 'user.update', 'uses' => 'BattleNexus\User\Controllers\UserController@update']);
	Route::delete('{id}', ['as' => 'user.delete', 'uses' => 'BattleNexus\User\Controllers\UserController@destroy']);
});

Route::get('register', ['as' => 'user.create', 'uses' => 'BattleNexus\User\Controllers\UserController@create']);
Route::post('register', ['as' => 'user.store', 'uses' => 'BattleNexus\User\Controllers\UserController@store']);
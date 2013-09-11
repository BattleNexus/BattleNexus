<?php
// User Routes

Route::get('login', ['as' => 'user.login', 'uses' => 'BattleNexus\User\Controllers\UserController@login']);
Route::post('login', ['as' => 'user.authorize', 'uses' => 'BattleNexus\User\Controllers\UserController@authorize']);

Route::resource('user', 'BattleNexus\User\Controllers\UserController');

Route::get('register', ['as' => 'user.create', 'uses' => 'BattleNexus\User\Controllers\UserController@create']);
Route::post('register', ['as' => 'user.store', 'uses' => 'BattleNexus\User\Controllers\UserController@store']);
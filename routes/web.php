<?php
Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');

Route::get('/design', 'DesignController@create');


Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');

Route::post('/design', 'DesignController@store');




Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/game', 'game');
//Route::view('/design', 'design');
Route::view('/profile', 'profile');
Route::view('/users', 'users');

Route::view('/user-review', 'user-review');
Route::view('/game-review', 'game-review');

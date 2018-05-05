<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/signup', function () {
    return view('register');
});
Route::get('/home', function() {
  return view('home');
})->middleware("auth");
Route::get('/signout', function() {
  Auth::logout();
  return redirect('/');
})->middleware("auth");
Route::post('/signup', 'BelajarController@register');
Route::post('/signin', 'BelajarController@login');
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

Route::get('/infrastructure', function () {
	return view('infrastructure');
});

Route::get('contact', 'ContactController@show');
Route::post('contact', 'ContactController@mail');

Route::get('/news', function () {
	return view('news');
});

Route::get('/news/current_students', function () {
	return view('current');
});

Route::get('/news/future_students', function () {
	return view('future');
});

Route::get('/about', function () {
	return view('about');
});

Route::get('/faculty', function () {
	return view('faculty');
});

Route::get('/logo', function () {
	return view('logo');
});

Route::get('/', function () {
    return view('welcome');
});

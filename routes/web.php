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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/author', function () {
    return view('author');
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');

Route::get('/admin/adduser', 'UserController@index');
Route::post('/admin/adduser', 'UserController@store');

Route::get('/admin/userlist', 'UserController@show');

Route::get('/admin/user/edit/{id}', 'UserController@edit_view')->name('user.edit');
Route::post('/admin/user/edit/{id}', 'UserController@update')->name('user.update');
Route::get('/admin/user/delete/{id}', 'UserController@delete')->name('user.delete');
Route::post('/admin/user/delete/{id}', 'UserController@destroy')->name('user.destroy');


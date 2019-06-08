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
// user registration
Route::get('/userDetail','UserDetailController@show')->name('UserDetail');
Route::post('/userDetail','UserDetailController@store');
Route::get('/userBusinessDetail','BusinessInformationController@show');
Route::post('/userBusinessDetail','BusinessInformationController@store');

//items
Route::get('/all_item','ItemController@index');
Route::get('/add_item','ItemController@create');
Route::post('/add_item','ItemController@store');
Route::get('/add_item{id}','ItemController@edit');
Route::put('/item/{id}','ItemController@update');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/admin','HomeController@show')->name('home');


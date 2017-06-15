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

//Route::resource('category','CategoryController');

Route::get('category','CategoryController@index');
Route::get('category/create','CategoryController@create');
Route::post('category/store','CategoryController@store');
Route::get('category/{id?}/edit','CategoryController@edit');
Route::put('category/update/{id?}','CategoryController@update');
Route::get('category/show/{id?}','CategoryController@show');
Route::delete('category/delete/{id?}','CategoryController@destroy');

Route::group(['middleware' => 'auth'], function () {

});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('addresses', 'AddressController');
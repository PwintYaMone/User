<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/users/reg', function () {// register form
    return view('Register');
});

Route::get('/users','RegisterController@index')->name('userindex');// user list

Route::post('/users/reg','RegisterController@store'); //insert

Route::get('/users/{id}','RegisterController@show'); //edit


Route::put('/users/{id}','RegisterController@update'); //update

Route::delete('/users/{id}','RegisterController@delete'); //delete


/*Route::get('/categories','CategoryController@index');
Route::get('/categories/{id}','CategoryController@show');
Route::post('/categories','CategoryController@store');
Route::put('/categories/{id}','CategoryController@update');
Route::patch('/categories/{id}','CategoryController@update');
Route::delete('/categories/{id}','CategoryController@destroy');
*/
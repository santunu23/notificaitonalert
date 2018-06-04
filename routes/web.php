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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/admindashboard', 'HomeController@index');
Route::get('/admin/adminIteminsert','HomeController@Insertitem');
Route::post('/admin/insertitem','HomeController@initem');
Route::post('/notification/get','HomeController@getJsSignal');
Route::post('/notification/read','HomeController@getJsread');
Route::get('/admin/manageuser','HomeController@getuserdetails');

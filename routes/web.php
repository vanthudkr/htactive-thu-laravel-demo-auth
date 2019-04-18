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

// Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

// Route::get('admin/tables', 'HomeController@adminTable')->middleware('admin')->name('table');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('dashboard', 'HomeController@admin')->name('dashboard');
    Route::get('table', 'HomeController@adminTable')->name('table');;
});

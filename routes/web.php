<?php
use Illuminate\Support\Facades\Route;
use App\Service;
use App\About;
use App\CatService;
use App\Http\Controllers\CatServiceController;

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

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('dashboard', 'HomeController@admin')->name('dashboard');
    Route::get('table', 'HomeController@adminTable')->name('table');

    Route::get('service', 'ServiceController@index')->name('service-index');
    Route::get('service/create', 'ServiceController@create')->name('service-create');
    Route::get('service/delete', 'ServiceController@destroy')->name('service-delete');
    Route::get('service/back', 'ServiceController@back')->name('service-back');
    Route::resource('/service', 'ServiceController');

    Route::get('about', 'AboutController@index')->name('about-index');
    Route::resource('about', 'AboutController');

    Route::get('catService', 'CatServiceController@index')->name('catService-index');
    Route::resource('catService', 'CatServiceController');

    Route::get('choose', 'ChooseController@index')->name('choose-index');
    Route::resource('choose', 'ChooseController');
});

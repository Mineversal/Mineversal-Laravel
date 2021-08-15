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


Route::get('/', function () {
    return view('welcome');
});

*/

/* Front End Route */
Route::get('/', 'MainController@index');
Route::get('/about','MainController@about')->name('about');
Route::get('/contact', 'MainController@contact')->name('contact');
Route::get('/team', 'MainController@team')->name('team');

Route::get('/admin/dashboard', 'MainController@AdminDashboard');

Route::get('/{slug}', 'MainController@show');



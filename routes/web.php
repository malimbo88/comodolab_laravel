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

// Route to index HotelController
Route::get('/', 'HotelController@index')->name('hotels.index');

// Route to index HotelController
Route::get('/bestprice', 'HotelController@bestPrice')->name('hotels.bestprice');

// Route resource HotelController
Route::resource("hotels", "HotelController");

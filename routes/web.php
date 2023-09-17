<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::prefix('dashboard')->name('dashboard.')->namespace('App\Http\Controllers')->group(function () {
    Route::get('/', 'DashboardController@index')->name('index')->middleware('admin');
    Route::resource('donors', 'DonorController')->middleware('admin');
    Route::resource('donations', 'DonationController')->middleware('admin');
});

Route::get('/', function () {
    return view('welcome');
});
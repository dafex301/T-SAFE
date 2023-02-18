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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    // Dashboard Routes
    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    // Authentication Routes
    Route::group(['middleware' => ['guest']], function () {
        // Register Routes
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        // Login Routes
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    // User routes
    Route::group(['middleware' => ['auth']], function () {
        // Lapor Routes
        Route::get('/lapor', 'LaporanController@create')->name('lapor.create');
        Route::post('/lapor', 'LaporanController@store')->name('lapor.store');

        // Verifikasi Laporan Routes
        Route::get('/lapor/[id]', 'VerifikasiLaporanController@show')->name('laporan.show');

        // Laporan Routes
        Route::get('/laporan', 'LaporanController@index')->name('laporan.index');

        // History Routes
        Route::get('/history', 'LaporanController@history')->name('laporan.history');

        // Logout Routes
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});

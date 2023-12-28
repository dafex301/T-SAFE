<?php

use App\Http\Controllers\LaporanController;
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
    // Guest Routes
    Route::group(['middleware' => ['guest']], function () {
        // Register Routes
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        // Login Routes
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    // Auth Routes
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/', 'DashboardController@index')->name('dashboard.index');
        Route::get('/profile', 'UserController@show')->name('user.profile');
        Route::post('/update-password', 'UserController@updatePassword')->name('password.update');

        // Lapor Routes
        Route::get('/lapor', 'LaporanController@create')->name('lapor.create');
        Route::post('/lapor', 'LaporanController@store')->name('lapor.store');

        // Laporan Routes
        Route::get('/laporan', 'LaporanController@index')->name('laporan.index');
        Route::get('/{role}/laporan/{id}', 'LaporanController@detailRole')->name('laporan.detailRole');
        Route::delete('/laporan/{laporan}', 'LaporanController@destroy')->name('laporan.destroy');

        // History Routes
        Route::get('/history', 'LaporanController@history')->name('laporan.history');

        // Verifikasi Laporan Routes
        Route::get('/detail/{id}', 'LaporanController@show')->name('laporan.show');
        Route::post('/detail/{id}', 'LaporanController@verifikasi')->name('laporan.detail');

        // Tindak Lanjut Routes
        Route::post('/tindaklanjut/{id}', 'LaporanController@tindaklanjut')->name('laporan.tindaklanjut');

        // Approve Routes
        Route::post('/approve/{id}', 'LaporanController@approve')->name('laporan.approve');

        // PIC Routes
        Route::get('/pic/laporan', 'LaporanController@checkPIC')->name('laporan.checkPIC');

        // Branch Manager Routes
        Route::get('/bm/laporan', 'LaporanController@checkBM')->name('laporan.checkBM');

        // DPnP Routes
        Route::get('/dpnp/laporan', 'LaporanController@checkDPnP')->name('laporan.checkDPnP');

        // Reject Routes
        Route::post('/reject/{id}', 'LaporanController@reject')->name('laporan.reject');

        // History Routes
        Route::get('/history', 'LaporanController@history')->name('laporan.history');

        // Revisi Routes
        Route::get('/revisi/{id}', 'LaporanController@show')->name('laporan.show');
        Route::get('/{role}/revisi/{id}', 'LaporanController@show')->name('laporan.show');
        Route::post('/revisi/{id}', 'LaporanController@revisi')->name('laporan.revisi');
        Route::get('/{role}/revisi', 'LaporanController@getRevisiStaff')->name('laporan.revisiStaff');

        // Print Routes
        Route::get('/print/{id}', 'LaporanController@printpdf')->name('laporan.print');

        // Logout Routes
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        Route::get('/print', function () {
            return view('print2');
        })->name('print');
    });

    // Admin Routes
    Route::group(['middleware' => ['admin']], function () {
        // User Routes
        Route::get('/admin/akun', 'UserController@index')->name('user.index');
        Route::post('/admin/akun', 'UserController@store')->name('user.store');
        Route::post('/admin/akun/import', 'UserController@import')->name('user.import');
        Route::put('/admin/akun/{id}', 'UserController@update')->name('user.update');
        Route::delete('/admin/akun/{id}', 'UserController@destroy')->name('user.destroy');

        // Kategori Routes
        Route::get('/admin/kategori', 'KategoriController@index')->name('kategori.index');
        Route::post('/admin/kategori', 'KategoriController@store')->name('kategori.store');
        Route::put('/admin/kategori/{id}', 'KategoriController@update')->name('kategori.update');
        Route::delete('/admin/kategori/{id}', 'KategoriController@destroy')->name('kategori.destroy');

        Route::get('/admin/aset', 'AsetController@index')->name('aset.index');
        Route::post('/admin/aset', 'AsetController@store')->name('aset.store');
        Route::put('/admin/aset/{id}', 'AsetController@update')->name('aset.update');
        Route::delete('/admin/aset/{id}', 'AsetController@destroy')->name('aset.destroy');
        Route::post('/admin/aset/import', 'AsetController@import')->name('aset.import');
    });
});

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
    return view('index');
});


// Route::resource('customer.index', 'CustomerController');
Route::resource('/customer', 'CustomerController');
Route::resource('/kategori', 'KategoriController');
Route::resource('/mobil', 'MobilController');
Route::resource('/booking', 'BookingController');
Route::resource('/pembayaran', 'PembayaranController');

Route::resource('/dashboard', 'DashboardController');
Auth::routes();
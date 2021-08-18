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

Route::get('/', function () {
    return view('welcome');
});
 
Auth::routes(['verify' => true ]);

Route::get('/home', 'User\HomeController@home')->name('home')->middleware('verified');

Route::get('/tambahdata', 'HomeController@tambahdata');

Route::get('/detail/{datas}', 'User\CekoutController@detail')->name('detail');

Route::post('/detail/{datas}', 'User\CekoutController@postcart')->name('detail');

Route::get('/cekout', 'User\CekoutController@cekout')->name('cekout');
Route::post('/cekout', 'User\CekoutController@cekoutpost')->name('cekoutpost');

Route::get('/transaksi', 'User\TransaksiController@index')->name('indexTransaksi');
Route::get('/transaksi/detail/{id}', 'User\TransaksiController@detail')->name('detailTransaksi');
Route::get('/transaksi/konfirmasi/{id}', 'User\TransaksiController@konfirmasi')->name('konfirmasiTransaksi');


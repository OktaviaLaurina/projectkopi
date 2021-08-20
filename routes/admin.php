<?php


Route::get('/', function(){
    return view('halaman-admin.users.dashboard');
})->name('dashboard');

Route::get('/index', function(){
    return view('halaman-admin.tamplate.index');
})->name('index');

Route::get('/datakopi', 'HomeController@datakopi')->name('datakopi');
Route::get('/forecast/{id}', 'HomeController@forcast')->name('forcast');

// data transaksi
Route::get('/datatransaksi', 'TransaksiController@adminDataTransaksi')->name('adminDataTransaksi');
Route::get('/datatransaksi/{id}', 'TransaksiController@detailTransaksi')->name('adminDetailTransaksi');
Route::get('/datatransaksi/konfirmasi/{id}', 'TransaksiController@konfirmasi')->name('adminKonfirmasiTransaksi');

Route::get('/tambahdata', 'HomeController@tambahdata')->name('tambahdata');
Route::post('/tambahdata', 'HomeController@datacreate')->name('datacreate');
Route::get('/edit/{datas}', 'HomeController@edit')->name('edit');
Route::patch('/edit/{datas}', 'HomeController@dataupdate')->name('dataupdate');

Route::get('/delete/{datas}', 'HomeController@datadelete')->name('datadelete');
 
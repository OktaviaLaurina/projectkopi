<?php


Route::get('/', function(){
    return view('halaman-admin.tamplate.default');
})->name('dashboard');

Route::get('/datakopi', 'HomeController@datakopi')->name('datakopi');

Route::get('/tambahdata', 'HomeController@tambahdata')->name('tambahdata');
Route::post('/tambahdata', 'HomeController@datacreate')->name('datacreate');
Route::get('/edit/{datas}', 'HomeController@edit')->name('edit');
Route::patch('/edit/{datas}', 'HomeController@dataupdate')->name('dataupdate');

Route::delete('/delete/{datas}', 'HomeController@datadelete')->name('datadelete');
 
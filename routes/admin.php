<?php


Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/datakopi', 'HomeController@datakopi')->name('datakopi');

Route::get('/tambahdata', 'HomeController@tambahdata')->name('tambahdata');
Route::post('/tambahdata', 'HomeController@datacreate')->name('datacreate');
Route::get('edit/{datas}', 'HomeController@edit');

 
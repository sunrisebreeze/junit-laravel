<?php
Route::get('/junit','JunitController@index');
Route::post('/store','JunitController@store')->name('junit.store');
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'FacilityController@index');

Route::get('/', function () {
    return view('mypage');
});

Auth::routes();

Route::get('/mypage', 'UserController@mypage')->name('mypage');


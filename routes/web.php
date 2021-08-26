<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'FacilityController@index')->name('top');
Route::get('/', function () {
    return view('mypage');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create_facilities/create' , 'FacilityController@create')->name('create_facility.create');
Route::post('/create_facilities', 'FacilityController@store')->name('create_facility.store');
Route::get('/mypage', 'UserController@mypage')->name('mypage');



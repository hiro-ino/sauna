<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'FacilityController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create_facilities/create' , 'FacilityController@create')->name('create_facility.create');
Route::post('/create_facilities', 'FacilityController@store')->name('create_facility.store');
Route::put('/create_facilities/{create_facility}' , 'FacilityController@update')->name('create_facility.update');
Route::get('/create_facilities/{create_facility}/edit' , 'FacilityController@edit')->name('create_facility.edit');
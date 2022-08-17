<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');

Route::get('/contacts', 'App\Http\Controllers\ContactController@index')->name('contacts.index');
Route::get('/contacts/create', 'App\Http\Controllers\ContactController@create')->name('contacts.create');
Route::post('/contacts', 'App\Http\Controllers\ContactController@store')->name('contacts.store');
Route::get('/contacts/{id}', 'App\Http\Controllers\ContactController@show')->name('contacts.show');
Route::get('/contacts/{id}/edit', 'App\Http\Controllers\ContactController@edit')->name('contacts.edit');
Route::patch('/contacts/{id}', 'App\Http\Controllers\ContactController@update')->name('contacts.update');
Route::delete('/contacts/{id}', 'App\Http\Controllers\ContactController@destroy')->name('contacts.destroy');





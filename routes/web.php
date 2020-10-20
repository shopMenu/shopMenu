<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/orders', 'HomeController@orders')->name('orders')->middleware('auth');


Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function () {

    Route::get('/', 'HomeController@admin');

    Route::resource('/tables', 'TableController');
    Route::get('/{id}/destroy','TableController@destroy');
    
    Route::resource('/orders', 'OrderController');
    Route::resource('/menus', 'MenuController');
    Route::resource('/staff', 'StaffController');


});


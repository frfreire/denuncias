<?php
/**
 * Created by PhpStorm.
 * User: cgafi
 * Date: 02/05/18
 * Time: 10:37
 */


Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
    Auth::routes();
    Route::get('home', 'HomeController@index')->name('home');
    Route::middleware('auth:admin')->group(function () {
        Route::get('another', 'AnotherController@index')->name('another');
    });
});
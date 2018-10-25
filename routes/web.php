<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => '/','middleware' => 'web'], function () {
    // you can also create route::group && middleware for route

});


Route::get('well', function () {
    return view('welcome');
});
<?php
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;
// Route::get('db', function () {
//     Schema::table('departments', function (Blueprint $table) {
//         $table->index('account_id');
//     });
// });
Route::get('/', function () {
    return view('hello');
});

Route::group(['prefix' => 'dev', 'middleware' => 'web'], function () {
   Route::get('param', 'LearnRouteController@index')->name('param');
   Route::get('go/{id}', 'LearnRouteController@go')->name('go.param');
});
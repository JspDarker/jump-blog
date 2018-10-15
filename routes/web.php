<?php
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;
// Route::get('db', function () {
//     Schema::table('departments', function (Blueprint $table) {
//         $table->index('account_id');
//     });
// });
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

Route::get('/', function () {
    return view('hello');
});

Route::group(['prefix' => 'dev', 'middleware' => 'web'], function () {
   Route::get('param', 'LearnRouteController@index')->name('param');
   Route::get('go/{id}', 'LearnRouteController@go')->name('go.param');
});
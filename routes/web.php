<?php
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Support\Facades\DB;
// Route::get('db', function () {
//     #Schema::table('departments', function (Blueprint $table) {
//     #    $table->index('account_id');
//     #});
//     DB::table('accounts')->where('id',1)->update(['fname' => 'JJJJ']);
// });
Route::get('/', function () {
    return view('hello');
});

Route::group(['prefix' => 'dev', 'middleware' => 'web'], function () {
   Route::get('param', 'LearnRouteController@index')->name('param');
   Route::get('go/{id}', 'LearnRouteController@go')->name('go.param');
   Route::get('depart', 'LearnRouteController@getDeparts')->name('depart');
});
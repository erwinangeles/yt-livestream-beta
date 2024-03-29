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

Route::get('/', function () {
    return redirect()->route('admin.livestreams.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('live/{slug}', 'LivestreamController@play');
Route::prefix('admin')->name('admin.')->group(function (){
    Route::resource('livestreams', 'Admin\LivestreamController');
});


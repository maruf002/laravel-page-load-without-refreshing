<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
// Route::get('second', function () {
//     return view('second');
// });
// Route::get('third', function () {
//     return view('third');
// });
Route::get('/second', 'oneController@second')->name('second');
Route::get('/third', 'oneController@third')->name('third');
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

Route::get('/', 'App\Http\Controllers\AbntController@index');
Route::post('/set', 'App\Http\Controllers\AbntController@store');
Route::post('/subcat', 'App\Http\Controllers\AbntController@subCategory')->name('subcat');
Route::post('/format', 'App\Http\Controllers\AbntFormat@format');


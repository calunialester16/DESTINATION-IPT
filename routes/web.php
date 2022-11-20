<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;

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

Route::get('/destinations', 'DestinationController@index');
Route::get('/', 'SiteController@index');

Route::get('/destinations/create', 'DestinationController@create');
Route::post('/destinations', 'DestinationController@store');
Route::get('/destinations/{des}', 'DestinationController@edit');
Route::patch('/destinations/{des}', 'DestinationController@update');
Route::delete('/destinations/{des}', 'DestinationController@delete');
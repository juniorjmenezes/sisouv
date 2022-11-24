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

/* Home Front-end*/
Route::get('initial', 'App\Http\Controllers\SystemController@indexFront');

/* Manifestations Blades */
Route::get('manifestations/add', 'App\Http\Controllers\ManifestationsController@create');
Route::get('manifestations/view', 'App\Http\Controllers\ManifestationsController@show');
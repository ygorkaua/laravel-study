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

// GET routes
Route::get('/series', 'App\Http\Controllers\SeriesController@index');
Route::get('/series/adicionar', 'App\Http\Controllers\SeriesController@create');
Route::get('/series/{id}', 'App\Http\Controllers\SeriesController@item');

// POST routes
Route::post('/series/adicionar', 'App\Http\Controllers\SeriesController@store');
Route::post('/series/remover/{id}', 'App\Http\Controllers\SeriesController@destroy');

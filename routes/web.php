<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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
    return view('pages.index');
})->name('pages.index');
Route::get('project', 'App\Http\Controllers\ProjectController@getList')->name('pages.list');
Route::get('project/{id}', 'App\Http\Controllers\ProjectController@getDetails')->name('pages.details');
Route::get('about', function () {
    return view('pages.about');
})->name('pages.about');

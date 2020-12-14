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
    return view('pages.index');
})->name('pages.index');
Route::get('project', 'App\Http\Controllers\ProjectController@getList')->name('pages.list');
Route::get('project/{id}', 'App\Http\Controllers\ProjectController@getDetails')->name('pages.details');
Route::get('about', function () {
    return view('pages.about');
})->name('pages.about');

Route::group(['prefix' => 'manage'], function() {
    Route::get('', function () { return view('pages.manage'); })->name('pages.manage');
    Route::get('create', 'App\Http\Controllers\ProjectController@getCreateProject')->name('manage.create');
    Route::post('create', 'App\Http\Controllers\ProjectController@postCreateProject')->name('manage.create');
    Route::get('update/{id}', 'App\Http\Controllers\ProjectController@getUpdateProject')->name('manage.update');
    Route::post('update/{id}', 'App\Http\Controllers\ProjectController@postUpdateProject')->name('manage.update');
    Route::get('delete/{id}', 'App\Http\Controllers\ProjectController@getDeleteProject')->name('manage.delete');
});

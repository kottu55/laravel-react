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



Route::get('/', 'HomeController@index')->name('index');
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/training-note', 'TrainingController@index')->name('training-index');
    Route::get('/training-note/new', 'TrainingController@new')->name('training-new');
    Route::post('/training-note/store', 'TrainingController@store')->name('training-store');
    Route::get('/training-note/calendar', 'TrainingController@calendar')->name('training-calendar');
    Route::get('/training-note/note', 'TrainingController@note')->name('training-note');
});
Route::get('/home', 'HomeController@home')->name('home');

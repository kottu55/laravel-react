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
    Route::get('/training-note/{date?}', 'TrainingController@note')->where('date', '^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$')->name('training-note');
    Route::get('/training-note/weight', 'BodyWeightController@index')->name('weight.index');
    Route::post('/training-note/weight/store', 'BodyWeightController@store')->name('weight.store');
    Route::get('/training-note/weight/create', 'BodyWeightController@create')->name('weight.create');
});
Route::get('/home', 'HomeController@home')->name('home');

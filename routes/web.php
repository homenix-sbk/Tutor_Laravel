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
    return view('index');
});


// Route::get('/', 'App\Http\Controllers\TutorController@index');
// Route::post('/', 'App\Http\Controllers\StaffController@post');
// Route::get('/add', 'App\Http\Controllers\StaffController@add');
// Route::post('/add', 'App\Http\Controllers\StaffController@create');
// Route::get('/edit', 'App\Http\Controllers\StaffController@edit');
// Route::post('/edit', 'App\Http\Controllers\StaffController@update');
// Route::get('/del', 'App\Http\Controllers\StaffController@del');
// Route::post('/del', 'App\Http\Controllers\StaffController@remove');
// Route::get('/show', 'App\Http\Controllers\StaffController@show');
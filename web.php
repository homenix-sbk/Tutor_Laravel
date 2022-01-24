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
// Route::get('/{any?}', function () {
//     return view('app');
// })->where('any', '.*');

Route::get('/', function () {
    return view('index');
});

Route::get('/teacher', 'TeacherController@index');
Route::get('/teacher/add', 'TeacherController@add');
Route::post('/teacher/add', 'TeacherController@create');
Route::get('/teacher/list', 'TeacherController@list');
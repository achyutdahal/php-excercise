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

Route::get('/', 'ProjectUploadController@index');
Route::post('upload', 'ProjectUploadController@upload')->name('upload');


Route::get('/projects', 'ProjectController@index');
Route::get('/project/projectId', 'ProjectController@project');

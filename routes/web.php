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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::post("/submit",'Controller@show');

Route::get('/', function () {
    return view('welcome');
});

Route::get('message/create', function () {
    return view('create');
});

Route::get('message', function () {
    return ;
});

Route::get('message/show', 'Controller@store');

Route::get('db', function(){
	return view('db');
});


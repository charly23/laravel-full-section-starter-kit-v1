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

Route::get('/', function ($name='home') {
    return view( 'index', ['page'=>$name] );
});

Route::get('/about', function ($name='about') {
    return view($name, ['page'=>$name]);
});

Route::get('/docs', function ($name='docs') {
    return view('docs/'.$name, ['page'=>$name]);
});

Auth::routes();

// Route::get('/home', 'HomeController@index');

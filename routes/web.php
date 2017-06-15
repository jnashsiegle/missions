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

Route::get('/', 		'PagesController@home');  //home.blade.php
Route::get('colophon', 	'PagesController@colophon'); //colophon.blade.php


/// Contact Form
Route::get('contact', 
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', 
  ['as' => 'contact', 'uses' => 'ContactController@store']);

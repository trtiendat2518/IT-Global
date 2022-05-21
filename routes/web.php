<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/ve-chung-toi', 'HomeController@aboutUs');
Route::get('/hoi-dap', 'HomeController@faq');
Route::get('/lien-he', 'HomeController@contact');
Route::get('/du-an', 'HomeController@project');

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
use Illuminate\Http\Request;



Route::get('/', 'PagesController@index');

Route::get('/loader', 'PagesController@loader');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::get('/projects', 'PagesController@projects');

/*Route::get('/contact', 'PagesController@contact');*/

Route::get('/contact','ContactController@create') -> name('contact.create');

Route::post('/contact','ContactController@store') -> name('contact.store');

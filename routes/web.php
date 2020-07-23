<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/', 'PagesController@index')->name('index');
Route::get('/resume', 'PagesController@resume')->name('resume');
Route::get('/photos', 'PagesController@photos')->name('photos');
Route::get('/contacts', 'PagesController@contacts')->name('contacts');
Route::post('/contacts', 'MessagesController@submit')->name('message.submit');




Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'name' => 'admin.'], function() {

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/messages', 'MessagesController@index')->name('message.index');

});


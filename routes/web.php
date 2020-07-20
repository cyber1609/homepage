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


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');

Route::get('/photos', function () {
    return view('photos');
})->name('photos');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::post('/contacts', 'MessagesController@submit')->name('contacts.submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

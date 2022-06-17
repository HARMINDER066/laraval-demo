<?php

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
    return view('frontend.index');
});
Route::get('/aboutus', 'App\Http\Controllers\HomeController@aboutus')->name('aboutus');
Route::get('/contactus', 'App\Http\Controllers\HomeController@contactus')->name('contactus');
Route::get('/become_a_teacher', 'App\Http\Controllers\HomeController@become_a_teacher')->name('become_a_teacher');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('contactus', [HomeController::class, 'contactus'])->name('contactus');
Route::get('become_a_teacher', [HomeController::class, 'become_a_teacher'])->name('become_a_teacher');


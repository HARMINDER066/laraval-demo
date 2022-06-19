<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TeacherController;
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

Route::group(['prefix' => 'admin'], function(){
    //teacher module
    Route::get('teacher', [TeacherController::class, 'index'])->name('admin.teacher');
    Route::get('teacher_list', [TeacherController::class, 'teacher_list'])->name('admin.teacher_list');
    Route::get('teacher_add', [TeacherController::class, 'teacher_add'])->name('admin.teacher_add');
    Route::post('teacher_add', [TeacherController::class, 'teacher_add'])->name('admin.teacher_add');
    Route::get('teacher_edit/{id}', [TeacherController::class, 'teacher_edit'])->name('admin.teacher_edit');
    Route::post('teacher_edit_save/{id}', [TeacherController::class, 'teacher_edit_save'])->name('admin.teacher_edit_save');
});
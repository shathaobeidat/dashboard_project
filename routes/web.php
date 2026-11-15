<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home_page');
});

Route::resource('/users',[UserControler::class]);
Route::resource('/lectures',[LectureControler::class]);
Route::resource('/courses',[CourseControler::class]);
Route::resource('/lecturecs',[LecturecControler::class]);

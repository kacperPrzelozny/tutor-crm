<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login/tutor', 'App\Http\Controllers\Auth\LoginController@showTutorLoginForm');
Route::get('/login/student', 'Auth\\LoginController@showStudentLoginForm');
Route::get('/register/tutor', 'Auth\\RegisterController@showTutorRegisterForm');
Route::get('/register/student', 'Auth\\RegisterController@showStudentRegisterForm');

Route::post('/login/tutor', 'Auth\LoginController@tutorLogin');
Route::post('/login/student', 'Auth\LoginController@studentLogin');
Route::post('/register/tutor', 'Auth\RegisterController@createTutor');
Route::post('/register/student', 'Auth\RegisterController@createStudent');

Route::view('/tutor', 'tutor');
Route::view('/student', 'student');

<?php

use App\Http\Controllers\PermissionController;
  
use App\Http\Controllers\StudentController;

use App\Http\Controllers\AccountController;

Route::resource('permissions', PermissionController::class);

Route::resource('students', StudentController::class);

Route::resource('accounts', AccountController::class);

route::post('/login',[AccountController::class,"login"]);
route::post('/slogin',[AccountController::class,"slogin"]);
route::get('/logout',[AccountController::class,"logout"]);




Route::get('/displayboard', function () {
    return view('displayboard');
});
Route::get('/student_login', function () {
    return view('student_login');
});


Route::get('/', function () {
    return view('index');
});

Route::get('/header', function () {
    return view('header');
});


Route::get('/footer', function () {
    return view('footer');
});

Route::get('/studentMenus', function () {
    return view('studentMenus');
});
Route::get('/menu', function () {
    return view('menu');
});

Route::get('/admin', function () {
    return view('admin');
});


Route::get('/student', function () {
    return view('student');
});

Route::get('/create_account', function () {
    return view('create_account');
});



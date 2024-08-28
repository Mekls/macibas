<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\FormController;

Route::get('/home', function () {
    return view ('home');
});

Route::resource('lessons', LessonController::class);

Route::resource('forms', FormController::class);

//Auth
Route::get('/', [SessionController::class, 'create']);
Route::post('/', [SessionController::class, 'store']);
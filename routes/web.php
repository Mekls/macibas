<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Lesson;

Route::get('/home', function () {
    return view ('home');
});

Route::get('/lessons', function () {
    return view ('lessons', [
        'lessons' => Lesson::all()
    ]);
});

//Auth
Route::get('/', [SessionController::class, 'create']);
Route::post('/', [SessionController::class, 'store']);
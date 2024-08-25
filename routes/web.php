<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('login');
});
*/

//Auth
Route::get('/', [SessionController::class, 'create']);
Route::post('/', [SessionController::class, 'store']);
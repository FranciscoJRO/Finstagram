<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//vista clase
Route::get('/', function () {
    return view('principal');
});

//controlador tiene la misma url pero diferente Request 

//get para visitar un citio web
Route::get('/sing-up', [RegisterController::class,'index'])->name('register');
//post cuando envias informacion en un servidor
Route::post('/sing-up', [RegisterController::class,'store'])->name('register');

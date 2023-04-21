<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;

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
//AUTH
Route::get('/', function () {
    return view('auth/home');
});
Route::get('/register', function () {
    return view('auth/register');
});
Route::get('/login', function () {
    return view('auth/login');
});
Route::post('/user_login',[authController::class,'login']);
Route::post('/user_signup',[authController::class,'store']);
Route::get('/dashbard',[authController::class,'show']);
// auth

// admin
Route::get('/form_info',[InfoController::class,'index']);
Route::post('/store_info',[InfoController::class,'store']);

Route::get('/show_info',[InfoController::class,'info_show']);
Route::get('/view_hobbie/{id}',[InfoController::class,'view_data']);


//admin

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AttendanceController;
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

Route::get('/', [TimeController::class, 'index']);
Route::get('/login/{login?}', [LoginController::class, 'index']);
Route::get('/register/{register?}', [RegisterController::class, 'index']);
Route::get('/attendance/{attendance?}', [AttendanceController::class, 'index']);

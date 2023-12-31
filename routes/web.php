<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/login', [LoginController::class,'index']); 
Route::post('/login/process',[LoginController::class,'LoginProcess']);
Route::get('/register',[RegisController::class,'index']);
Route::post('/register/process',[RegisController::class,'RegisProcess']);


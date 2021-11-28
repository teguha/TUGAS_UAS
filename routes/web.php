<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('welcome');
});

Route::get('/login',[LoginController::class,'login'])->name('form-login');

Route::get('register',[LoginController::class,'proses_Register'])->name('register');
Route::post('register_proses',[LoginController::class,'Register'])->name('register_proses');

Route::post('/loginProses',[LoginController::class,'proses_login'])->name('proses_login');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountdbController;
 

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
Route::get('/login', [AccountdbController::class, 'login']);
Route::get('/registration', [AccountdbController::class, 'registration']);
Route::post('/register-user', [AccountdbController::class,'registerUser'])->name('register-user');
Route::post('/login-user', [AccountdbController::class,'loginUser'])->name('login-user'); 
Route::get('/dashboard',[AccountdbController::class, 'dashboard']);
Route::get('delete/{id}',[AccountdbController::class, 'delete']);
Route::get('edit/{id}',[AccountdbController::class, 'update']);
Route::post('update2',[AccountdbController::class, 'update2']);


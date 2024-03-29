<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('/sale', function () {
    return view('sale', [
        'title' => 'Sale'
    ]);
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/login',[LoginController::class,'index'])->middleware('guest'); 

Route::post('/login',[LoginController::class,'authenticate']); 

Route::get('/register',[RegisterController::class, 'index']); 

Route::post('/register',[RegisterController::class, 'store']); 

Route::get('/dashboard',[DashboardController::class, 'index']); 

Route::post('/logout',[loginController::class, 'logout']); 


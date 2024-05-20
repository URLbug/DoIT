<?php

use App\Http\Middleware\IsAuth;
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

Route::namespace('App\\Http\\Controllers')->group(function() {
    Route::middleware('auth')->get('/', function () {
        auth()->logout();
        return view('welcome');
    })->name('home');

    // Regist
    Route::middleware([IsAuth::class])->get('/regist', 'LoginController@indexRegist')->name('regist');
    Route::post('/regist', 'LoginController@storeRegist');

    // Login
    Route::middleware([IsAuth::class])->get('/login', 'LoginController@indexLogin')->name('login');
    Route::post('/login', 'LoginController@storeLogin');
});

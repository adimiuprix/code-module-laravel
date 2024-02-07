<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RequestController;

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

Route::get('/', function () {
    return view('welcome');
});

// Membuat route dasar
Route::get('salam', function (){
    return 'Ini salam pembuka';
});

// Membuat route default
// Kita import dulu controllernya, namanya TestingController menggunakan 'use'
Route::get('user', [UserController::class, 'index']);

// Berikut ini methode yang tersedia untuk membuat routes:
// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

// Ini routes untuk menangani beberapa https request get dan post di singkat jadi satu
Route::match(['get', 'post'], 'namaroutes', function () {
    // ...
});
 
Route::any('routesaniy', function () {
    // ...
});

// Route bernama
Route::get('profile', [UserController::class, 'myprofile'])->name('profile');
Route::get('request', [RequestController::class, 'index']);
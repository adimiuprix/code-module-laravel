<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\GawaiController;

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

// Membuat route dasar
Route::get('salam', function (){
    return 'Ini salam pembuka';
});

// view nya ada di folder resources/views/
Route::get('/', function () {
    return view('index');
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

// Melakukan grup pada route
// Cara #1
// Route::group(function () {
//     // Rute-rute yang akan dimasukkan ke dalam grup ini
// });
// Cara #2 Memberi nama pada group
// Route::prefix('namaGroup')->group(function () {
//     // Rute-rute yang akan dimasukkan ke dalam grup ini
// });
// // Cara #3 Membungkus dengan Middleware
// Route::middleware('namaMiddleware')->prefix('namaPrefix')->group(function () {
//     // Rute-rute yang akan dimasukkan ke dalam grup ini
// });

// Route::prefix('namaGroup')->group(function () {
//     // Rute-rute yang akan dimasukkan ke dalam grup ini
// });

Route::prefix('gawai')->group(function(){
    Route::get('/', [GawaiController::class, 'index'])->name('gawai.index');    // Beri method nama isinya boleh string apa aja
    Route::get('tambah', [GawaiController::class, 'add'])->name('gawai.tambah');
    Route::post('store', [GawaiController::class, 'store'])->name('gawai.store');

    Route::match(['get', 'post'], 'handle', [GawaiController::class, 'handle'])->name('gawai.handle');
});
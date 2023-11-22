<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BungaController;

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
    return view('halamanutama');
});

Route::get('/dashboard', [BerandaController::class,'index'])->name('dashboard');
Route::get('/belanja', [BerandaController::class,'belanja'])->name('belanja');
Route::get('/showbunga/{id}', [BungaController::class, 'show'])->name('bungashow');

// register
route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');

// login
Route::get('/login', [LoginController::class,'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');


Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    Route::get('/databunga', [BungaController::class,'index'])->name('databunga');
    Route::get('/createbunga', [BungaController::class,'create'])->name('createbunga');
    Route::post('/simpanbunga', [BungaController::class,'store'])->name('simpanbunga');
    Route::get('/editbunga/{id}', [BungaController::class,'edit'])->name('editbunga');
    Route::post('/updatebunga/{id}', [BungaController::class,'update'])->name('updatebunga');
    Route::delete('/deletebunga/{id}', [BungaController::class,'destroy'])->name('deletebunga');
});

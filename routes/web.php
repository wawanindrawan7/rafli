<?php

use App\Http\Controllers\BookJurnalController;
use App\Http\Controllers\InformasiPertanianController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SensorPertanianController;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('book-jurnal', [BookJurnalController::class, 'index']);
Route::get('book-jurnal/create', [BookJurnalController::class, 'create']);
Route::post('book-jurnal/create', [BookJurnalController::class, 'create']);
Route::get('book-jurnal/edit', [BookJurnalController::class, 'edit']);
Route::post('book-jurnal/edit', [BookJurnalController::class, 'edit']);
Route::get('book-jurnal/delete', [BookJurnalController::class, 'delete']);


Route::get('tanaman', [TanamanController::class, 'index']);
Route::get('tanaman/create', [TanamanController::class, 'create']);
Route::post('tanaman/create', [TanamanController::class, 'create']);
Route::get('tanaman/edit', [TanamanController::class, 'edit']);
Route::post('tanaman/edit', [TanamanController::class, 'edit']);
Route::get('tanaman/delete', [TanamanController::class, 'delete']);


Route::get('sensor-pertanian', [SensorPertanianController::class, 'index']);
Route::get('sensor-pertanian/create', [SensorPertanianController::class, 'create']);
Route::post('sensor-pertanian/create', [SensorPertanianController::class, 'create']);
Route::get('sensor-pertanian/edit', [SensorPertanianController::class, 'edit']);
Route::post('sensor-pertanian/edit', [SensorPertanianController::class, 'edit']);
Route::get('sensor-pertanian/delete', [SensorPertanianController::class, 'delete']);

Route::get('profile', [ProfileController::class, 'index']);
Route::post('profile/edit', [ProfileController::class, 'edit']);

Route::get('users', [UserController::class, 'index']);
Route::get('users/create', [UserController::class, 'create']);
Route::post('users/create', [UserController::class, 'create']);
Route::get('users/edit', [UserController::class, 'edit']);
Route::post('users/edit', [UserController::class, 'edit']);
Route::get('users/delete', [UserController::class, 'delete']);

Route::get('informasi-pertanian', [InformasiPertanianController::class, 'index']);

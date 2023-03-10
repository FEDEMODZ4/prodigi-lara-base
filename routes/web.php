<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientiController;
use App\Http\Controllers\OrdiniController;
use App\Http\Controllers\FattureController;
use App\Http\Controllers\OrderController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/clienti', [ClientiController::class, 'clientiView']);
Route::get('/ordini', [OrdiniController::class, 'ordiniView']);
Route::get('/fatture', [FattureController::class, 'fattureView']);

Route::get('/ordini', [OrderController::class, 'index'])->name('orders.index');
Route::get('/ordini/create', [OrderController::class, 'create'])->name('orders.create');
Route::get('/ordini', [OrderController::class, 'store'])->name('orders.store');
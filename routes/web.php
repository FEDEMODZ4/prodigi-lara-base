<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;

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

/*
Route::get('/clienti', [ClientiController::class, 'clientiView']);
Route::get('/ordini', [OrdiniController::class, 'ordiniView']);
Route::get('/fatture', [FattureController::class, 'fattureView']);
*/

Route::resource('orders', OrderController::class);
Route::resource('customers', CustomerController::class);
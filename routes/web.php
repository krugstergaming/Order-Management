<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('landing');
});

// Route::get('/customer', [CustomerController::class, 'customerIndex']);

Route::get('/customer/{customerId?}', [CustomerController::class, 'customerIndexID']);

Route::get('/order', [CustomerController::class, 'orderIndexID']);

Route::put('/order/{orderItemId}/status', [CustomerController::class, 'updateOrderStatus']);


// {orderId}
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ecommerce_dashboard');
});

Route::get('/ecommerce_products', function () {
    return view('ecommerce_products');
});

Route::get('/ecommerce_orders', function () {
    return view('ecommerce_orders');
});

Route::get('ecommerce_customers', function () {
    return view('ecommerce_customers');
});

Route::get('/ecommerce_settings', function () {
    return view('ecommerce_settings');
});


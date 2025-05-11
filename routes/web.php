<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('home');
});


Route::get('product/view', function () {
    return view('pages.shop.product.details');
})->name('product.view');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('home');
})->name('home');


Route::get('product/view', function () {
    return view('pages.shop.product.details');
})->name('product.view');

Route::get('actor/view',function (){
    return view('pages.actor.view');
})->name('actor.view');

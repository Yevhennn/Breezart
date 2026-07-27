<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\OrderController;

Route::get('/lang/{locale}', [LanguageController::class, 'switchLang'])->name('lang.switch');

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::post('/installation-order', [OrderController::class, 'storeInstallationOrder'])->name('installation.order');


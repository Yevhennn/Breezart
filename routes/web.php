<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ChatbotController;

Route::get('/lang/{locale}', [LanguageController::class, 'switchLang'])->name('lang.switch');

Route::get('/', [HomeController::class, 'index'])->name('home');

// Order & Contact routes
Route::post('/installation-order', [OrderController::class, 'storeInstallationOrder'])->name('installation.order');
Route::post('/contact-message', [OrderController::class, 'storeContactMessage'])->name('contact.message');

// Chatbot route
Route::post('/chatbot/ask', [ChatbotController::class, 'ask'])->name('chatbot.ask');

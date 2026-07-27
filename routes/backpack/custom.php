<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\InstallationCardCrudController;

use App\Http\Controllers\Admin\ServiceCardCrudController;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\CRUD.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
], function () { // custom admin routes
    Route::crud('installation-cards', InstallationCardCrudController::class);
    Route::crud('service-cards', ServiceCardCrudController::class);
}); // this should be the absolute last line of this file

/**
 * DO NOT ADD ANYTHING HERE.
 */

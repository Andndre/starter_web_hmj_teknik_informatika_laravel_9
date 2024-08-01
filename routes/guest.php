<?php

use App\Http\Controllers\Guest\HomepageController;
use Illuminate\Support\Facades\Route;

// Guest Route Here
// ================
Route::group(['prefix' => '/'], function () {
    // Render Home Page
    Route::get('/', [HomepageController::class, 'index'])->name('guest.home.index');
});

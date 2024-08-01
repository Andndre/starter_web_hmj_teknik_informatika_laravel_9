<?php

use App\Http\Controllers\AccountDisabledController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Laravel UI Route
// ================
Auth::routes([
    'register' => false,
]);

Route::prefix('account-disabled')->group(function () {
    Route::get('/', [AccountDisabledController::class, 'index'])->name('account-disabled.index');
});

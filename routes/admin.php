<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is.active']], function () {
    Route::get('/', fn () => redirect()->route('admin.home.index'));
    Route::prefix('/home')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('admin.home.index');
    });
});

?>

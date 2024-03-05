<?php
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;

    Route::get('/', [IndexController::class, "index"])->name('home');
    Route::get('/ar_view', [IndexController::class, "ar"])->name('ar');

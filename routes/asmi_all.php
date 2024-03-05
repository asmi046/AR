<?php
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;

    Route::get('/', [IndexController::class, "index"])->name('home');
    Route::get('/ar_view/{id}', [IndexController::class, "ar"])->name('ar');
    Route::get('/get_qr/{id}', [IndexController::class, "qr"])->name('qr');
    Route::get('/dimon', [IndexController::class, "dimon"])->name('dimon');

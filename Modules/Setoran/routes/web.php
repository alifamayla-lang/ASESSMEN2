<?php

use Illuminate\Support\Facades\Route;
use Modules\Setoran\Http\Controllers\SetoranController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('setorans', SetoranController::class)->names('setoran');
});

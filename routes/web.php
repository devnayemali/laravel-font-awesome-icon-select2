<?php

use App\Http\Controllers\IconController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IconController::class, 'index'])->name('icons.index');

<?php

use App\Http\Controllers\frontEndControllers\PageController;

use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');

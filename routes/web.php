<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;

Route::get('/', [InfoController::class, 'resume'])->name('resume');
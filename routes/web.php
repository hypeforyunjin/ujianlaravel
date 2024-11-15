<?php

use Illuminate\Support\Facades\Route;


Route::get('/movies', [App\Http\Controllers\MovieController::class, 'index']);

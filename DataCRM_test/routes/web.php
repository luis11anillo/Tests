<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

/* Route::get('/', function () {
    return view('index');
}); */

Route::get('/', [DataController::class, 'index']);

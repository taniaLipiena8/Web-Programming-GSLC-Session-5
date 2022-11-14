<?php

use Illuminate\Support\Facades\Route;




Route::get('/home', [\App\Http\Controllers\ProductsController::class, 'index']);

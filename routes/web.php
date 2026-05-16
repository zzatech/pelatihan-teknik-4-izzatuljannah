<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
Route::get('/',[ProdukController::class, 'index']);
Route::get('/detail',[App\Http\Controllers\ProdukController::class, 'detail']);
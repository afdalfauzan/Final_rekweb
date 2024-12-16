<?php

use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;

// Ganti halaman utama ke halaman inventaris
Route::get('/', [InventoryController::class, 'index']);

// Rute untuk Inventori menggunakan Route::resource
Route::resource('inventories', InventoryController::class);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController; // این خط فقط یک بار باید باشه

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// مسیر برای نمایش دروازه امپراطوری (صفحه اصلی)
Route::get('/', [MenuController::class, 'home'])->name('home');

// مسیر برای نمایش لیست کامل منو (اتاق بایگانی)
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
// ... کدهای قبلی (مسیرهای home و menu)

// مسیر برای نمایش جزئیات یک غذای خاص
Route::get('/item/{item}', [MenuController::class, 'showItem'])->name('item.show');
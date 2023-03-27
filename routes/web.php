<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/api-exemplo', [ApiController::class]);

Route::get('/', [ApiController::class, 'home'])->name('home');

Route::get('/country/{state}', [ApiController::class, 'dashboard'])->name('dashboard');

Route::get('/compare', [ApiController::class, 'compare'])->name('compare');
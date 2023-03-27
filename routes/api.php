<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/all-countries', function () {
    return Http::get('https://dev.kidopilabs.com.br/exercicio/covid.php?listar_paises=1')->json();
})->name('all-countries');

Route::get('/compare-countries', [ApiController::class, 'compareCountries'])->name('compare-countries');
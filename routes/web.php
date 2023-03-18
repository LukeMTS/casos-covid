<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

// Route::get('/test', function () {
//     $response = Http::get('https://dev.kidopilabs.com.br/exercicio/covid.php?pais=Brazil')->json();
//     dd($response);
// });

Route::get('/', [ApiController::class, 'home']);

Route::get('/{state}', [ApiController::class, 'dashboard'])->name('dashboard');

Route::get('/stats/brazil', [ApiController::class, 'stats'])->name('stats');
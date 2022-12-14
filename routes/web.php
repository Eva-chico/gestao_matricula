<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EntrarController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/pagina_inicial', [HomeController::class, 'pagina']);
Route::get('/entrar', [EntrarController::class, 'login']);

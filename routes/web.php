<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\serviciosController;
use App\Http\Controllers\proyectosController;
use App\Http\Controllers\contactanosController;
use App\Http\Controllers\DashController;

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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dash.index');
})->name('dashboard');

Route::get('/', HomeController::class)->name('index');
Route::get('/nosotros', [AboutController::class, 'about'])->name('nosotros');
Route::get('/servicios', [serviciosController::class, 'index'])->name('servicios');
Route::get('/proyectos', [proyectosController::class, 'index'])->name('proyectos');
Route::get('/contactanos', [contactanosController::class, 'index'])->name('contactanos');
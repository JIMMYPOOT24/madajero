<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\certificacionController;
use App\Http\Controllers\serviciosController;
use App\Http\Controllers\proyectosController;
use App\Http\Controllers\contactanosController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\nosotrosController;
use App\Http\Controllers\tbclientesController;
use App\Http\Controllers\tbproyectosController;
use App\Http\Controllers\tbserviciosController;
use App\Models\serviciosModel;

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

// Ruta del controlador para los cruds de las vistas 
/* Route::resource('dashboard/datosinicio', inicioController::class); */

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dash.index');
})->name('dashboard');





Route::resource('datosinicio', inicioController::class);
Route::resource('datosnosotros', nosotrosController::class);
Route::resource('datoscertificaciones', certificacionController::class);
Route::resource('datosservicios', serviciosController::class);
Route::resource('datostbservicios', tbserviciosController::class);
Route::resource('datosproyectos', proyectosController::class);
Route::resource('datostbproyectos', tbproyectosController::class);
Route::resource('datostbclientes', tbclientesController::class);


//Ruta para crear el Storage
Route::get('storage-link', function(){

    if(file_exists(public_path('public_html/storage'))){
        return 'The "Public/Storage" directory already exists.';
    }

    app('files')->link(storage_path('JORRIFADI/app/public'), public_path('public_html/storage'));

    return 'The "Public/Storage" directory has been linked.';
        
});


Route::get('/', HomeController::class)->name('index');
Route::get('/nosotros', [AboutController::class, 'about'])->name('nosotros');
Route::get('/servicios', [serviciosController::class, 'index'])->name('servicios');
Route::get('/proyectos', [proyectosController::class, 'index'])->name('proyectos');
Route::get('/contactanos', [contactanosController::class, 'index'])->name('contactanos');

//Route por el cual se mandara el correo
Route::post('/contactanos', [contactanosController::class, 'store'])->name('contactanos.store');
<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beastmexController;

Route::get('/', [beastmexController::class,'metodoWelcome'])->name('apodoPrincipal');
Route::get('/altaProvedores', [beastmexController::class,'metodoProvedores'])->name('apodoProvedores');
Route::get('/consultaCompra', [beastmexController::class,'metodoConsultaCompra'])->name('apodoCC');
Route::get('/consultaProducto', [beastmexController::class,'metodoConsultaProducto'])->name('apodoCP');
Route::get('/crudUsuario', [beastmexController::class,'metodoCrudUsuario'])->name('apodoPrincipalCU');
Route::get('/editarProducto', [beastmexController::class,'metodoEditarProducto'])->name('apodoEP');
Route::get('/editarUsuario', [beastmexController::class,'metodoEditarUsuario'])->name('apodoEU');
Route::get('/menuAdmin', [beastmexController::class,'metodoAdmin'])->name('apodoAdmin');
Route::get('/ordenCompra', [beastmexController::class,'metodoOrdenCompra'])->name('apodoOC');
Route::get('/regisUsuario', [beastmexController::class,'metodoRegisUsuario'])->name('apodoRU');
Route::get('/regisProducto', [beastmexController::class,'metodoRegisProducto'])->name('apodoRU');
Route::get('/reporteGanancias', [beastmexController::class,'metodoReporteGanancias'])->name('apodoRG');
Route::get('/reporteProducto', [beastmexController::class,'metodoReporteProducto'])->name('apodoRP');
Route::get('/ventaCliente', [beastmexController::class,'metodoVentaCliente'])->name('apodovc');
Route::get('/consultaTickets', [beastmexController::class,'metodoConsultaTickets'])->name('apodoCT');

Route::post('/guardar', [beastmexController::class,'metodoGuardar']);
Route::post('/guardar1', [beastmexController::class,'metodoGuardar1']);

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

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/

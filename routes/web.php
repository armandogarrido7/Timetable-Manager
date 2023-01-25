<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AsignaturasController;
use App\Http\Controllers\HorasController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/asignaturas', [AsignaturasController::class, 'index'])->name('asignaturas');
    Route::get('/asignaturas/crear', [AsignaturasController::class, 'create']);
    Route::post('/asignaturas/crear', [AsignaturasController::class, 'store']);
    Route::get('/asignaturas/ver/{id}', [AsignaturasController::class, 'show']);
    Route::get('/asignaturas/editar/{id}', [AsignaturasController::class, 'edit']);
    Route::post('/asignaturas/editar/{id}', [AsignaturasController::class, 'update']);
    Route::get('/asignaturas/eliminar/{id}', [AsignaturasController::class, 'destroy']);
    Route::get('/horario', [HorasController::class, 'index']);
    Route::get('/horario/editar', [HorasController::class, 'edit']);
    Route::post('horario/editar', [HorasController::class, 'store']);
    Route::get('/horario/eliminar/{diaH}/{horaH}/{codAs}', [HorasController::class, 'destroy']);
});


require __DIR__.'/auth.php';

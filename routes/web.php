<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvidersController;

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

Route::get('/', HomePageController::class);
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);



Route::prefix('admin')->middleware('admin')->group(function(){
    Route::get('providers', [ProvidersController::class, 'index']); // index (listado)
    Route::get('providers/create', [ProvidersController::class, 'create']); // create (formulario)
    Route::get('providers/{provider}', [ProvidersController::class, 'show']); // show (mostrar)
    Route::post('providers', [ProvidersController::class, 'store']); // store (guardar)

    Route::get('providers/{id}/edit/editprovider', [ProvidersController::class, 'edit'])->name('providers.edit'); // edit (formulario de edicion)
    Route::put('providers/{id}', [ProvidersController::class, 'update'])->name('providers.update'); // update (actualizar)
    Route::delete('providers/{provider}', [ProvidersController::class, 'destroy']); // destroy (eliminar)
});



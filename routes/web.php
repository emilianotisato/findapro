<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);



Route::prefix('admin')->middleware('admin')->group(function(){
    Route::get('providers', [ProvidersController::class, 'index']); // index (listado)
    //Route::get('providers/{provider}', [ProvidersController::class, 'show']); // show (mostrar)

    Route::get('providers/create', [ProvidersController::class, 'create']); // create (formulario)
    Route::post('providers', [ProvidersController::class, 'store']); // store (guardar)

    Route::get('providers/{provider}/edit', [ProvidersController::class, 'edit']); // edit (formulario de edicion)
    Route::put('providers/{provider}', [ProvidersController::class, 'update']); // update (actualizar)

    Route::delete('providers/{provider}', [ProvidersController::class, 'destroy']); // destroy (eliminar)

   
});



<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcademiaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
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


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', [IndexController::class, 'index']);

    Route::get('/academia', [AcademiaController::class, 'listar']);
    Route::get('/academia/novo', [AcademiaController::class, 'novo']);
    Route::post('/academia/salvar', [AcademiaController::class, 'salvar']);
    Route::get('/academia/editar/{id}', [AcademiaController::class, 'editar']);
    Route::get('/academia/apagar/{id}', [AcademiaController::class, 'apagar']);
    Route::get('/academia/pdf', [AcademiaController::class, 'pdf']);

    Route::get('/cliente', [ClienteController::class, 'listar']);
    Route::get('cliente/novo', [ClienteController::class, 'novo']);
    Route::post('/cliente/salvar', [ClienteController::class, 'salvar']);
    Route::get('/cliente/editar/{id}', [ClienteController::class, 'editar']);
    Route::get('/cliente/apagar/{id}', [ClienteController::class, 'apagar']);

    Route::get('/usuario', [UserController::class, 'listar']);
    Route::get('/usuario/mensagem/{id}', [UserController::class, 'mensagem']);
    Route::post('/usuario/sendMail', [UserController::class, 'sendMail']);
});

require __DIR__.'/auth.php';

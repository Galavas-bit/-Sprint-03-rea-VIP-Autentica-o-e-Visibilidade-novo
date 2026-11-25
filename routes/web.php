<?php

use App\Http\Controllers\EventoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventoController::class, 'index'])->name('eventos.index');
Route::get('/eventos/{id}', [EventoController::class, 'show'])->name('eventos.show');
Route::post('/eventos/{id}/perguntas', [EventoController::class, 'storePergunta'])
    ->middleware('auth')
    ->name('eventos.perguntas.store');

// Placeholder mínimo para a rota nomeada "login" exigida pelo middleware "auth"
// quando um visitante não autenticado é redirecionado. Substitua pela rota de
// login real (Breeze/Fortify) que veio na branch v3.0-authN-public.
Route::get('/login', function () {
    return response('Login', 200);
})->name('login');

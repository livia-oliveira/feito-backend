<?php

use Illuminate\Support\Facades\Route;

Route::post('/tarefas', [TarefasController::class, 'store'])->name('tarefas.store');
Route::get('/tarefas/{id}', [TarefasController::class, 'show'])->name('tarefas.show');
Route::put('/tarefas/{id}', [TarefasController::class, 'update'])->name('tarefas.update');
Route::delete('tarefas/{id}', [TarefasController::class, 'destroy'])->name('tarefas.destroy');

Route::post('/subtarefas', [SubtarefasController::class, 'store'])->name('subtarefas.store');
Route::get('/subtarefas/{id}', [SubtarefasController::class, 'show'])->name('subtarefas.show');
Route::put('/subtarefas/{id}', [SubtarefasController::class, 'update'])->name('subtarefas.update');
Route::delete('subtarefas/{id}', [SubtarefasController::class, 'destroy'])->name('subtarefas.destroy');

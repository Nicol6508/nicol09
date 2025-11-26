<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;

Route::get('/', [TareaController::class, 'index']);
Route::post('/tareas', [TareaController::class, 'store']);
Route::get('/tareas/{id}/edit', [TareaController::class, 'edit']);
Route::put('/tareas/{id}', [TareaController::class, 'update']);
Route::delete('/tareas/{id}', [TareaController::class, 'destroy']);
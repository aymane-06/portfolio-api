<?php

use App\Http\Controllers\ProjectsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::get('/projects', [ProjectsController::class,'projectsApi'])->name('projects.index');
Route::get('/projects/{id}', [ProjectsController::class,'show'])->name('projects.show');

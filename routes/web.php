<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class,'home'])
        ->name('home');
Route::get('/contact', [PageController::class, 'contact'])
        ->name('contact');
Route::get('/projects', [PageController::class, 'projects'])
        ->name('projects');
Route::get('/resume', [PageController::class, 'resume'])
    ->name('resume');

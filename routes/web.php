<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\RejoindreController;
use App\Http\Controllers\NosprogrammeController;
 

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
// Les routes de la page d'accueil
Route::get('/', [AccueilController::class, 'index'])->name('accueil');

// Les routes de la page A Propos
Route::get('/A-Propos', [AproposController::class, 'show'])->name('apropos');

// Les routes de la page Blog
Route::get('/Blog', [BlogController::class, 'show'])->name('blog');

// Les routes de la page Forum
Route::get('/Forum', [ForumController::class, 'show'])->name('forum');

// Les routes de la page Nos Programmes
Route::get('/Programme', [NosprogrammeController::class, 'show'])->name('programme');

// Les routes de la page Nous Rejoindre
Route::get('/Rejoindre', [RejoindreController::class, 'show'])->name('rejoindre');
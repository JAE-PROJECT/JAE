<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MoncompteController;
use App\Http\Controllers\RejoindreController;
use App\Http\Controllers\HistoriqueController;
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

/* Route::get('/', function () {
    return view('welcome');
});
 */
// Les routes de la page d'accueil
Route::get('/', [AccueilController::class, 'index'])->name('accueil');

// Les routes de la page A Propos
Route::get('/a-Propos', [AproposController::class, 'show'])->name('apropos');

// Les routes de la page Blog
Route::get('/blog', [BlogController::class, 'show'])->name('blog');

// Les routes de la page Forum
Route::get('/forum', [ForumController::class, 'show'])->name('forum');

// Les routes de la page Nos Programmes
Route::middleware('auth')->group(function () {
Route::get('/programme', [NosprogrammeController::class, 'show'])->name('programme');
Route::post('/programme', [NosprogrammeController::class, 'store'])->name('inscription_programme');
});

// Les routes de la page Nous Rejoindre ---------------------------->vvv
Route::get('/rejoindre', [RejoindreController::class, 'show'])->name('rejoindre');
Route::post('/rejoindre', [RejoindreController::class, 'store'])->name('rejoindre_form');

//les routes du dashboard de l'utilisateur-------------------------------

//historique de mes participations
Route::middleware('auth')->get('/mon-historique', [HistoriqueController::class, 'index'])->name('nos-programmes.historique');
//mes infos modifications
Route::middleware('auth')->get('/mon-compte', [MoncompteController::class, 'index'])->name('moncompte');

//mes infos modifications edit
Route::middleware('auth')->put('/mon-compte/editer', [MoncompteController::class, 'edit'])->name('moncompte.editer');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Gestion des rôles et l'administration

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin', function () {
        return "Hello mon pote l'admin";
    });
});

Route::middleware(['auth','role:chief'])->group(function () {
    Route::get('/chief', function () {
        return "Hello mon pote le chef";
    });
});



require __DIR__.'/auth.php';


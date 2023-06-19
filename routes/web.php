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

/* Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin', function () {
        return "Hello mon pote l'admin";
    });
});

Route::middleware(['auth','role:chief'])->group(function () {
    Route::get('/chief', function () {
        return "Hello mon pote le chef";
    });
}); */

Route::middleware(['auth', 'role:admin|jaefriend|chief'])->prefix('admin')->group(function () {
    //Tableau de bord
    Route::get('', [DashboardController::class, 'index'])->name('admin.index');

    //Resource zone
    Route::resource('zone', ZoneController::class);
    //Export pdf
    Route::get('/zone/export/pdf', [ZoneController::class, 'exportPdf'])->name('zone.export-pdf');
    //Export xlsx
    Route::get('/zone/export/excel', [ZoneController::class, 'exportExcel'])->name('zone.export-excel');
    //export pdf by zone
    Route::get('/zone/export/{id}/pdf', [ZoneController::class, 'exportPdfByZone'])->name('zone.export-pdf-by-zone');


    //Resource User
    Route::resource('user', UserController::class);
    //Export pdf
    Route::get('/user/export/pdf', [UserController::class, 'exportPdf'])->name('user.export-pdf');
    //Export xlsx
    Route::get('/user/export/excel', [UserController::class, 'exportExcel'])->name('user.export-excel');

    //Editer role
    Route::get('/user/{id}/role', [UserController::class, 'editrole'])->name('user.edit.role');
    //Editer role sauvegarder
    Route::put('/user/{id}/role/sauv', [UserController::class, 'editroleupdate'])->name('user.edit.role.update');




    //Resource Event
    Route::resource('event', EventController::class);
    //Export pdf inscrit
    Route::get('/event/export/{id}/pdfinscrit', [EventController::class, 'exportPdfinscrit'])->name('event.export-pdfinscrit');
    //Export pdf
    Route::get('/event/export/pdfinscrit', [EventController::class, 'exportPdf'])->name('event.export-pdf');
    //Export xlsx
    Route::get('/event/export/excel', [EventController::class, 'exportExcel'])->name('event.export-excel');

    //Export excell inscrits
    Route::get('/event/export/{id}/excellinscrit', [EventController::class, 'exportExcelInscrit'])->name('event.export-excellinscrit');




    //Resource Type
    Route::resource('type', TypeController::class);
    //Export pdf
    Route::get('/type/export/pdf', [TypeController::class, 'exportPdf'])->name('type.export-pdf');
    //Export xlsx
    Route::get('/type/export/excel', [TypeController::class, 'exportExcel'])->name('type.export-excel');
});



require __DIR__.'/auth.php';


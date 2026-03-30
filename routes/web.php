<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobOfferController;
use App\Http\Controllers\ApplicationController;

// Page d'accueil
Route::get('/', [PageController::class, 'home'])->name('home');

// Routes d'authentification
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Page Notre Identité
Route::get('/notre-identite', [PageController::class, 'identity'])->name('identity');

// Pages Services
Route::get('/services/sabou-clean', [PageController::class, 'sabouClean'])->name('services.clean');
Route::get('/services/sabou-event', [PageController::class, 'sabouEvent'])->name('services.event');
Route::get('/services/sabou-food', [PageController::class, 'sabouFood'])->name('services.food');
Route::get('/services/sabou-agro', [PageController::class, 'sabouAgro'])->name('services.agro');
Route::get('/services/sabou-academy', [PageController::class, 'sabouAcademy'])->name('services.academy');

// Page Partenaires & Clients
Route::get('/partenaires-clients', [PageController::class, 'partners'])->name('partners');

// Pages Actualités (nouvelles routes dynamiques)
Route::get('/actualites', [NewsController::class, 'index'])->name('news');
Route::get('/actualites/categorie/{category}', [NewsController::class, 'category'])->name('news.category');
Route::get('/actualite/{news:slug}', [NewsController::class, 'show'])->name('news.show');

// Page Contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// ─── Pages Carrières (publiques) ────────────────────────────────────────────
Route::get('/carrieres', [PageController::class, 'careers'])->name('careers');
Route::get('/carrieres/{jobOffer}', [PageController::class, 'careersShow'])->name('careers.show');
Route::post('/carrieres/{jobOffer}/postuler', [ApplicationController::class, 'store'])->name('careers.apply');

// Routes d'administration (protégées par authentification)
Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Gestion des actualités
    Route::get('/actualites', [AdminController::class, 'newsIndex'])->name('news.index');
    Route::get('/actualites/creer', [AdminController::class, 'newsCreate'])->name('news.create');
    Route::post('/actualites', [AdminController::class, 'newsStore'])->name('news.store');
    Route::get('/actualites/{news}', [AdminController::class, 'newsShow'])->name('news.show');
    Route::get('/actualites/{news}/modifier', [AdminController::class, 'newsEdit'])->name('news.edit');
    Route::put('/actualites/{news}', [AdminController::class, 'newsUpdate'])->name('news.update');
    Route::delete('/actualites/{news}', [AdminController::class, 'newsDestroy'])->name('news.destroy');

    // Gestion des offres d'emploi
    Route::get('/offres', [JobOfferController::class, 'index'])->name('job-offers.index');
    Route::get('/offres/creer', [JobOfferController::class, 'create'])->name('job-offers.create');
    Route::post('/offres', [JobOfferController::class, 'store'])->name('job-offers.store');
    Route::get('/offres/{jobOffer}', [JobOfferController::class, 'show'])->name('job-offers.show');
    Route::get('/offres/{jobOffer}/modifier', [JobOfferController::class, 'edit'])->name('job-offers.edit');
    Route::put('/offres/{jobOffer}', [JobOfferController::class, 'update'])->name('job-offers.update');
    Route::delete('/offres/{jobOffer}', [JobOfferController::class, 'destroy'])->name('job-offers.destroy');

    // Gestion des candidatures
    Route::get('/candidatures', [ApplicationController::class, 'index'])->name('applications.index');
    Route::get('/candidatures/{application}', [ApplicationController::class, 'show'])->name('applications.show');
    Route::patch('/candidatures/{application}/statut', [ApplicationController::class, 'updateStatus'])->name('applications.update-status');
});

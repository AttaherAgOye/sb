<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;

// Page d'accueil
Route::get('/', [PageController::class, 'home'])->name('home');

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

// Routes d'administration (avec protection middleware si nécessaire)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Gestion des actualités
    Route::get('/actualites', [AdminController::class, 'newsIndex'])->name('news.index');
    Route::get('/actualites/creer', [AdminController::class, 'newsCreate'])->name('news.create');
    Route::post('/actualites', [AdminController::class, 'newsStore'])->name('news.store');
    Route::get('/actualites/{news}', [AdminController::class, 'newsShow'])->name('news.show');
    Route::get('/actualites/{news}/modifier', [AdminController::class, 'newsEdit'])->name('news.edit');
    Route::put('/actualites/{news}', [AdminController::class, 'newsUpdate'])->name('news.update');
    Route::delete('/actualites/{news}', [AdminController::class, 'newsDestroy'])->name('news.destroy');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// Page Actualités
Route::get('/actualites', [PageController::class, 'news'])->name('news');

// Page Contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

@extends('layouts.app')

@section('title', 'Contact - Sabou-Gnouma SARL')

@section('content')
<div class="h-20"></div>

<!-- Hero Section -->
<section class="relative h-96 bg-gradient-to-r from-gray-900 to-gray-700 text-white">
    <div class="max-w-7xl mx-auto px-4 h-full flex items-center">
        <div class="max-w-3xl">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Contactez-Nous</h1>
            <p class="text-2xl font-light">Nous sommes à votre écoute pour répondre à tous vos besoins</p>
        </div>
    </div>
</section>

<!-- Section principale de contact -->
<section class="premium-section bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Formulaire de contact -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Envoyez-nous un message</h2>
                <form class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nom complet *</label>
                        <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent transition">
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email *</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent transition">
                    </div>
                    
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Téléphone</label>
                        <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent transition">
                    </div>
                    
                    <div>
                        <label for="service" class="block text-sm font-semibold text-gray-700 mb-2">Service concerné</label>
                        <select id="service" name="service" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent transition">
                            <option value="">-- Sélectionnez un service --</option>
                            <option value="clean">SABOU-CLEAN - Propreté & Entretien</option>
                            <option value="event">SABOU-EVENT - Décoration & Événementiel</option>
                            <option value="food">SABOU-FOOD - Restauration & Traiteur</option>
                            <option value="agro">SABOU-AGRO - Agrobusiness</option>
                            <option value="academy">SABOU-ACADEMY - Formation</option>
                            <option value="general">Question générale</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">Sujet *</label>
                        <input type="text" id="subject" name="subject" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent transition">
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message *</label>
                        <textarea id="message" name="message" rows="6" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent transition"></textarea>
                    </div>
                    
                    <button type="submit" class="btn-premium bg-gray-900 text-white w-full py-4 text-lg">
                        Envoyer le message
                    </button>
                </form>
            </div>
            
            <!-- Informations de contact -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Nos Coordonnées</h2>
                
                <div class="space-y-6 mb-8">
                    <!-- Adresse -->
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Adresse</h3>
                            <p class="text-gray-600">Ouagadougou, Burkina Faso</p>
                            <p class="text-gray-600">Secteur XX, Avenue XXX</p>
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Email</h3>
                            <p class="text-gray-600">contact@sabougnouma.com</p>
                            <p class="text-gray-600">info@sabougnouma.com</p>
                        </div>
                    </div>
                    
                    <!-- Téléphone -->
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Téléphone</h3>
                            <p class="text-gray-600">+226 XX XX XX XX</p>
                            <p class="text-gray-600">+226 YY YY YY YY</p>
                        </div>
                    </div>
                    
                    <!-- Horaires -->
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Horaires d'ouverture</h3>
                            <p class="text-gray-600">Lundi - Vendredi : 8h00 - 18h00</p>
                            <p class="text-gray-600">Samedi : 8h00 - 13h00</p>
                        </div>
                    </div>
                </div>
                
                <!-- Réseaux sociaux -->
                <div>
                    <h3 class="font-semibold text-gray-900 mb-4">Suivez-nous sur les réseaux</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-blue-600 text-white rounded-lg flex items-center justify-center hover:bg-blue-700 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-lg flex items-center justify-center hover:opacity-90 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-blue-700 text-white rounded-lg flex items-center justify-center hover:bg-blue-800 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gray-900 text-white rounded-lg flex items-center justify-center hover:bg-black transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Carte Google Maps -->
<section class="premium-section bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-8">Notre Localisation</h2>
        <div class="bg-gray-200 h-96 rounded-2xl flex items-center justify-center">
            <div class="text-center">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <p class="text-gray-600">Intégration Google Maps ici</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Services -->
<section class="premium-section bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-8">Ou contactez directement un service</h2>
        <div class="grid md:grid-cols-5 gap-4">
            <a href="{{ route('services.clean') }}" class="p-6 bg-blue-50 rounded-xl text-center hover:shadow-lg transition border-2 border-transparent hover:border-blue-600">
                <div class="text-3xl mb-2">🧹</div>
                <h3 class="font-bold text-blue-600">SABOU-CLEAN</h3>
            </a>
            <a href="{{ route('services.event') }}" class="p-6 bg-purple-50 rounded-xl text-center hover:shadow-lg transition border-2 border-transparent hover:border-purple-600">
                <div class="text-3xl mb-2">🎭</div>
                <h3 class="font-bold text-purple-600">SABOU-EVENT</h3>
            </a>
            <a href="{{ route('services.food') }}" class="p-6 bg-orange-50 rounded-xl text-center hover:shadow-lg transition border-2 border-transparent hover:border-orange-600">
                <div class="text-3xl mb-2">🍽️</div>
                <h3 class="font-bold text-orange-600">SABOU-FOOD</h3>
            </a>
            <a href="{{ route('services.agro') }}" class="p-6 bg-green-50 rounded-xl text-center hover:shadow-lg transition border-2 border-transparent hover:border-green-600">
                <div class="text-3xl mb-2">🌾</div>
                <h3 class="font-bold text-green-600">SABOU-AGRO</h3>
            </a>
            <a href="{{ route('services.academy') }}" class="p-6 bg-yellow-50 rounded-xl text-center hover:shadow-lg transition border-2 border-transparent hover:border-yellow-600">
                <div class="text-3xl mb-2">📚</div>
                <h3 class="font-bold text-yellow-600">SABOU-ACADEMY</h3>
            </a>
        </div>
    </div>
</section>
@endsection

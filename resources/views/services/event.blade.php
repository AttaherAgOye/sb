@extends('layouts.app')

@section('title', 'SABOU-EVENT - Décoration & Événementiel')

@section('content')
<div class="h-20"></div>

<!-- Bannière Hero Premium -->
<section class="relative h-[500px] md:h-[600px] overflow-hidden hero-section" style="background-image: url('/images/services/event/decoration.JPG'); background-size: cover; background-position: center;">
    <div class="hero-overlay"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-purple-900/80 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-10">
        <div class="hero-content max-w-4xl">
            <div class="inline-block mb-4 px-6 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/30 zoom-in">
                <span class="text-sm font-bold text-white tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                    SERVICE PREMIUM
                </span>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-6 text-white fade-in leading-tight">
                SABOU-<span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-300 to-pink-300">EVENT</span>
            </h1>
            <p class="text-2xl md:text-3xl font-light mb-6 text-purple-100 fade-in-delay">Un lieu vide est une scène en attente de magie.</p>
            <p class="text-lg text-purple-200 mb-8 fade-in-delay-2">Décoration & Ingénierie événementielle de prestige</p>
            
            <div class="flex flex-wrap gap-4 mb-8 fade-in-delay-3">
                <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-white font-medium">24/7</span>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-white font-medium">Créativité Premium</span>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                    <span class="text-white font-medium">Sur Mesure</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Présentation -->
<section class="premium-section bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-br from-purple-50 via-pink-50 to-transparent rounded-full blur-3xl opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16 fade-in-section">
            <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-purple-50 to-pink-50 rounded-full border border-purple-200">
                <span class="text-sm font-bold text-gray-700 tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    EXCELLENCE GARANTIE
                </span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Transformer vos <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">événements</span> en moments inoubliables</h2>
            <p class="text-xl text-gray-600">Créativité, élégance et professionnalisme pour chaque célébration</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <p class="institutional-text mb-6 leading-relaxed">
                    SABOU-EVENT conçoit, décore et organise vos <span class="font-semibold text-gray-900">événements d'entreprise, mariages, galas et célébrations</span> 
                    avec créativité et professionnalisme. Chaque détail compte pour créer une expérience mémorable.
                </p>
                <p class="institutional-text mb-8 leading-relaxed">
                    De la conception à la réalisation, notre équipe créative transforme vos idées en réalité avec <span class="font-semibold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">élégance et précision</span>.
                </p>
                
                <!-- Mini statistiques -->
                <div class="grid grid-cols-3 gap-4">
                    <div class="text-center p-4 bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl">
                        <div class="text-2xl font-bold text-purple-600">200+</div>
                        <div class="text-xs text-gray-600 font-medium">Événements</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-pink-50 to-pink-100 rounded-xl">
                        <div class="text-2xl font-bold text-pink-600">500+</div>
                        <div class="text-xs text-gray-600 font-medium">Invités/Event</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-xl">
                        <div class="text-2xl font-bold text-indigo-600">100%</div>
                        <div class="text-xs text-gray-600 font-medium">Sur Mesure</div>
                    </div>
                </div>
            </div>
            <div class="relative h-96 rounded-2xl overflow-hidden shadow-2xl group bg-gradient-to-br from-purple-50 to-pink-50 flex items-center justify-center">
                <!-- Animation Lottie EVENT -->
                <div class="lottie-container relative z-10 group-hover:scale-105 transition-transform duration-500">
                    <iframe 
                        src="https://lottie.host/embed/0dc4835a-72f5-413c-9aa1-300533e484db/wvzv5ztDXe.lottie" 
                        style="width: 320px; height: 320px; border: none; background: transparent;" 
                        allowfullscreen>
                    </iframe>
                </div>
                
                <!-- Overlay avec info -->
                <div class="absolute inset-0 bg-gradient-to-t from-purple-600/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Événementiel Premium</h3>
                    <p class="text-purple-100 text-sm">Créativité et excellence à chaque détail</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nos offres -->
<section class="premium-section bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-tr from-purple-50 to-pink-50 rounded-full blur-3xl opacity-30 translate-y-1/2 translate-x-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16 fade-in-section">
            <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-purple-50 to-pink-50 rounded-full border border-purple-200">
                <span class="text-sm font-bold text-gray-700 tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                    NOS PRESTATIONS
                </span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Nos Prestations <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">Événementielles</span></h2>
            <p class="text-xl text-gray-600">Excellence et créativité pour chaque type d'événement</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="service-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg hover:scale-110 transition-transform">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Mariages & Célébrations</h3>
                <ul class="space-y-3 text-gray-600 mb-6">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Décoration florale premium
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Scénographie sur mesure
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Coordination du jour J
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Prestations audiovisuelles
                    </li>
                </ul>
                <div class="text-center">
                    <span class="inline-block px-4 py-2 bg-purple-50 text-purple-600 rounded-full text-sm font-semibold">Sur devis</span>
                </div>
            </div>
            
            <div class="service-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                <div class="w-20 h-20 bg-gradient-to-br from-pink-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg hover:scale-110 transition-transform">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Événements d'Entreprise</h3>
                <ul class="space-y-3 text-gray-600 mb-6">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Séminaires et conférences
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Lancements de produits
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Team building
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Galas d'entreprise
                    </li>
                </ul>
                <div class="text-center">
                    <span class="inline-block px-4 py-2 bg-pink-50 text-pink-600 rounded-full text-sm font-semibold">Forfait disponible</span>
                </div>
            </div>
            
            <div class="service-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg hover:scale-110 transition-transform">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Événements Institutionnels</h3>
                <ul class="space-y-3 text-gray-600 mb-6">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Cérémonies officielles
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Réceptions diplomatiques
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Anniversaires d'organisation
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Protocole VIP
                    </li>
                </ul>
                <div class="text-center">
                    <span class="inline-block px-4 py-2 bg-indigo-50 text-indigo-600 rounded-full text-sm font-semibold">Protocole Premium</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Équipe -->
<section class="premium-section bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-6">L'Équipe Créative SABOU-EVENT</h2>
        <p class="text-center text-xl text-gray-600 mb-16 max-w-3xl mx-auto">
            Des créatifs passionnés au service de vos événements exceptionnels
        </p>
        
        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-32 h-32 bg-purple-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-4xl">🎨</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Décorateurs</h3>
                <p class="text-gray-600">Créativité et élégance</p>
            </div>
            
            <div class="text-center">
                <div class="w-32 h-32 bg-purple-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-4xl">📋</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Event Planners</h3>
                <p class="text-gray-600">Organisation minutieuse</p>
            </div>
            
            <div class="text-center">
                <div class="w-32 h-32 bg-purple-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-4xl">🎬</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Techniciens</h3>
                <p class="text-gray-600">Son, lumière, vidéo</p>
            </div>
            
            <div class="text-center">
                <div class="w-32 h-32 bg-purple-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-4xl">💐</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Fleuristes</h3>
                <p class="text-gray-600">Art floral premium</p>
            </div>
        </div>
    </div>
</section>

<!-- Impact / Chiffres clés -->
<section class="premium-section bg-gradient-to-br from-purple-600 via-purple-700 to-pink-600 text-white relative overflow-hidden">
    <!-- Éléments décoratifs -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-pink-400/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16 fade-in-section">
            <div class="inline-block mb-4 px-6 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                <span class="text-sm font-bold tracking-wide text-white flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                    PERFORMANCE
                </span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-4">SABOU-EVENT en <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-300 to-purple-300">Chiffres</span></h2>
            <p class="text-xl text-purple-100 mb-8">Des résultats qui témoignent de notre excellence</p>
            
            <!-- Animation Lottie pour les statistiques -->
            <div class="flex justify-center mb-8">
                <div class="lottie-stats-container" style="opacity: 0.7;">
                    <iframe 
                        src="https://lottie.host/embed/0dc4835a-72f5-413c-9aa1-300533e484db/wvzv5ztDXe.lottie" 
                        style="width: 200px; height: 200px; border: none; background: transparent;" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
        
        <div class="grid md:grid-cols-4 gap-8">
            <div class="stats-card text-center p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/15 transition-all duration-300">
                <div class="w-16 h-16 bg-white/20 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-pink-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                </div>
                <div class="text-4xl font-bold mb-2 text-white">200+</div>
                <div class="text-lg text-pink-100 font-medium">Événements réalisés</div>
            </div>
            
            <div class="stats-card text-center p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/15 transition-all duration-300">
                <div class="w-16 h-16 bg-white/20 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <div class="text-4xl font-bold mb-2 text-white">500+</div>
                <div class="text-lg text-purple-100 font-medium">Personnes par événement</div>
            </div>
            
            <div class="stats-card text-center p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/15 transition-all duration-300">
                <div class="w-16 h-16 bg-white/20 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="text-4xl font-bold mb-2 text-white">100%</div>
                <div class="text-lg text-indigo-100 font-medium">Personnalisé</div>
            </div>
            
            <div class="stats-card text-center p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/15 transition-all duration-300">
                <div class="w-16 h-16 bg-white/20 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <div class="text-4xl font-bold mb-2 text-white">5⭐</div>
                <div class="text-lg text-yellow-100 font-medium">Satisfaction client</div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="premium-section bg-gray-50">
    <div class="max-w-4xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Questions Fréquentes</h2>
        
        <div class="space-y-6">
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Combien de temps avant l'événement dois-je vous contacter ?</h3>
                <p class="text-gray-600">Idéalement 2 à 3 mois pour les grands événements, mais nous pouvons intervenir plus rapidement selon la disponibilité.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Proposez-vous la location de matériel ?</h3>
                <p class="text-gray-600">Oui, nous disposons d'un large catalogue : tentes, mobilier, éclairage, sonorisation, vaisselle premium, etc.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Gérez-vous également le traiteur ?</h3>
                <p class="text-gray-600">Oui, SABOU-EVENT travaille en synergie avec SABOU-FOOD pour vous offrir une prestation complète.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="premium-section bg-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">Un événement à organiser ?</h2>
        <p class="text-xl text-gray-600 mb-8">Confiez-nous votre projet pour une réalisation exceptionnelle</p>
        <a href="{{ route('contact') }}" class="btn-premium bg-purple-600 text-white inline-block">Demander un Devis</a>
    </div>
</section>
<script>
// Intersection Observer pour animations au scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

// Observer les sections avec fade-in
document.querySelectorAll('.fade-in-section').forEach(el => {
    observer.observe(el);
});

// Observer les cartes de service
document.querySelectorAll('.service-card').forEach((el, index) => {
    el.style.transitionDelay = `${index * 0.1}s`;
    observer.observe(el);
});

// Observer les cartes de statistiques
document.querySelectorAll('.stats-card').forEach((el, index) => {
    el.style.transitionDelay = `${index * 0.15}s`;
    observer.observe(el);
});
</script>
@endsection

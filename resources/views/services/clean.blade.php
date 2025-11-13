@extends('layouts.app')

@section('title', 'SABOU-CLEAN - Propreté & Entretien Professionnel')


@section('content')
<div class="h-20"></div>

<!-- Bannière Hero Premium -->
<section class="relative h-[500px] md:h-[600px] overflow-hidden hero-section" style="background-image: url('/images/services/clean/netoyage3.JPG'); background-size: cover; background-position: center;">
    <div class="hero-overlay"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-10">
        <div class="hero-content max-w-4xl">
            <div class="inline-block mb-4 px-6 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/30 zoom-in">
                <span class="text-sm font-bold tracking-wide text-white flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    SERVICE PREMIUM
                </span>
            </div>
            <h1 class="hero-title text-5xl md:text-7xl font-bold mb-6 text-white">SABOU-<span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-400">CLEAN</span></h1>
            <p class="hero-subtitle text-2xl md:text-3xl mb-6 font-light text-white">Aucun espace n'est trop grand à entretenir.</p>
            <p class="text-xl mb-8 text-blue-100">Excellence en propreté et entretien professionnel</p>
            
            <div class="flex flex-wrap gap-4 mt-8">
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="font-semibold text-white">24/7 Disponible</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    <span class="font-semibold text-white">Certifié Qualité</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                    <span class="font-semibold text-white">Éco-responsable</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Présentation du service -->
<section class="premium-section bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-blue-50 to-cyan-50 rounded-full blur-3xl opacity-30 -translate-y-1/2 translate-x-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="grid md:grid-cols-2 gap-12 items-center fade-in-section">
            <div>
                <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-full border border-blue-200">
                    <span class="text-sm font-bold text-gray-700 tracking-wide flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        EXCELLENCE GARANTIE
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Un service d'entretien <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">sans compromis</span></h2>
                <p class="institutional-text mb-4 leading-relaxed">
                    SABOU-CLEAN propose des <span class="font-semibold text-gray-900">solutions professionnelles</span> de nettoyage et d'entretien pour les entreprises, 
                    institutions et espaces commerciaux. Notre équipe formée et équipée garantit des <span class="font-semibold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">résultats impeccables</span>.
                </p>
                <p class="institutional-text mb-6 leading-relaxed">
                    De la simple bureautique aux grands complexes industriels, nous adaptons nos services à vos besoins 
                    spécifiques avec <span class="font-semibold text-gray-900">rigueur et professionnalisme</span>.
                </p>
                
                <!-- Mini statistiques -->
                <div class="grid grid-cols-3 gap-4 mt-8">
                    <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl">
                        <div class="text-2xl font-bold text-blue-600">100K+</div>
                        <div class="text-xs text-gray-600 font-medium">m² entretenus</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-cyan-50 to-cyan-100 rounded-xl">
                        <div class="text-2xl font-bold text-cyan-600">50+</div>
                        <div class="text-xs text-gray-600 font-medium">Clients</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-green-50 to-green-100 rounded-xl">
                        <div class="text-2xl font-bold text-green-600">99%</div>
                        <div class="text-xs text-gray-600 font-medium">Satisfaction</div>
                    </div>
                </div>
            </div>
            <div class="relative h-96 rounded-2xl overflow-hidden shadow-2xl group bg-gradient-to-br from-blue-50 to-cyan-50 flex items-center justify-center">
                <!-- Animation Lottie -->
                <div class="lottie-container relative z-10 group-hover:scale-105 transition-transform duration-500">
                    <iframe 
                        src="https://lottie.host/embed/4fff3312-f62d-4bfa-b44b-c0b18dfa6ae5/0efK1i8LmW.lottie" 
                        style="width: 320px; height: 320px; border: none; background: transparent;" 
                        allowfullscreen>
                    </iframe>
                </div>
                
                <!-- Overlay avec info -->
                <div class="absolute inset-0 bg-gradient-to-t from-blue-600/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Propreté Professionnelle</h3>
                    <p class="text-blue-100 text-sm">Standards internationaux adaptés</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nos offres -->
<section class="premium-section bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-blue-50 to-cyan-50 rounded-full blur-3xl opacity-30 translate-y-1/2 -translate-x-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16 fade-in-section">
            <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-full border border-blue-200">
                <span class="text-sm font-bold text-gray-700 tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                    NOS SERVICES
                </span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Nos Offres <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">SABOU-CLEAN</span></h2>
            <p class="text-xl text-gray-600">Solutions adaptées à tous vos besoins de propreté</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="service-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg hover:scale-110 transition-transform">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Bureaux & Espaces Professionnels</h3>
                <ul class="space-y-3 text-gray-600 mb-6">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Nettoyage quotidien ou périodique
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Entretien des sols et surfaces
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Désinfection complète
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Gestion des déchets
                    </li>
                </ul>
                <div class="text-center">
                    <span class="inline-block px-4 py-2 bg-blue-50 text-blue-600 rounded-full text-sm font-semibold">À partir de 50€/jour</span>
                </div>
            </div>
            
            <div class="service-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                <div class="w-20 h-20 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg hover:scale-110 transition-transform">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Immeubles & Copropriétés</h3>
                <ul class="space-y-3 text-gray-600 mb-6">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Nettoyage des parties communes
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Entretien des vitres en hauteur
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Maintenance des espaces verts
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Service de conciergerie
                    </li>
                </ul>
                <div class="text-center">
                    <span class="inline-block px-4 py-2 bg-cyan-50 text-cyan-600 rounded-full text-sm font-semibold">Sur devis</span>
                </div>
            </div>
            
            <div class="service-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg hover:scale-110 transition-transform">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Nettoyage Spécialisé</h3>
                <ul class="space-y-3 text-gray-600 mb-6">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Nettoyage après travaux
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Désinfection industrielle
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Traitement des sols techniques
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Interventions d'urgence
                    </li>
                </ul>
                <div class="text-center">
                    <span class="inline-block px-4 py-2 bg-green-50 text-green-600 rounded-full text-sm font-semibold">24/7 Disponible</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Équipe dédiée -->
<section class="premium-section bg-white relative overflow-hidden">
    <div class="absolute top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2 opacity-30">
        <iframe 
            src="https://lottie.host/embed/4fff3312-f62d-4bfa-b44b-c0b18dfa6ae5/0efK1i8LmW.lottie" 
            style="width: 400px; height: 400px; border: none; background: transparent;" 
            allowfullscreen>
        </iframe>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16 fade-in-section">
            <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-full border border-blue-200">
                <span class="text-sm font-bold text-gray-700 tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    NOTRE ÉQUIPE
                </span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Notre Équipe <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">SABOU-CLEAN</span></h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Des professionnels formés, équipés et motivés pour garantir la propreté de vos espaces
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="team-card text-center p-6 rounded-2xl hover:shadow-lg transition-all duration-300">
                <div class="w-32 h-32 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full mx-auto mb-6 flex items-center justify-center shadow-lg hover:scale-110 transition-transform">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Agents de nettoyage certifiés</h3>
                <p class="text-gray-600 leading-relaxed">Formation continue et respect des protocoles de qualité</p>
                <div class="mt-4 inline-block px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-sm font-medium">Certifiés ISO</div>
            </div>
            
            <div class="team-card text-center p-6 rounded-2xl hover:shadow-lg transition-all duration-300">
                <div class="w-32 h-32 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-full mx-auto mb-6 flex items-center justify-center shadow-lg hover:scale-110 transition-transform">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Superviseurs qualifiés</h3>
                <p class="text-gray-600 leading-relaxed">Contrôle qualité et coordination terrain en temps réel</p>
                <div class="mt-4 inline-block px-3 py-1 bg-cyan-50 text-cyan-600 rounded-full text-sm font-medium">Management Pro</div>
            </div>
            
            <div class="team-card text-center p-6 rounded-2xl hover:shadow-lg transition-all duration-300">
                <div class="w-32 h-32 bg-gradient-to-br from-green-500 to-green-600 rounded-full mx-auto mb-6 flex items-center justify-center shadow-lg hover:scale-110 transition-transform">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Équipement professionnel</h3>
                <p class="text-gray-600 leading-relaxed">Matériel moderne et produits écologiques certifiés</p>
                <div class="mt-4 inline-block px-3 py-1 bg-green-50 text-green-600 rounded-full text-sm font-medium">Éco-certifié</div>
            </div>
        </div>
    </div>
</section>

<!-- Impact / Chiffres clés -->
<section class="premium-section bg-gradient-to-br from-blue-600 via-blue-700 to-cyan-600 text-white relative overflow-hidden">
    <!-- Éléments décoratifs -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-cyan-400/10 rounded-full blur-3xl"></div>
    
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
            <h2 class="text-4xl md:text-5xl font-bold mb-4">SABOU-CLEAN en <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-blue-300">Chiffres</span></h2>
            <p class="text-xl text-blue-100 mb-8">Des résultats qui parlent d'eux-mêmes</p>
            
            <!-- Animation Lottie pour les statistiques -->
            <div class="flex justify-center mb-8">
                <div class="lottie-stats-container" style="opacity: 0.7;">
                    <iframe 
                        src="https://lottie.host/embed/4fff3312-f62d-4bfa-b44b-c0b18dfa6ae5/0efK1i8LmW.lottie" 
                        style="width: 200px; height: 200px; border: none; background: transparent;" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
        
        <div class="grid md:grid-cols-4 gap-8">
            <div class="stats-card text-center p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/15 transition-all duration-300">
                <div class="w-16 h-16 bg-white/20 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-cyan-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <div class="text-4xl font-bold mb-2 text-white">50+</div>
                <div class="text-lg text-cyan-100 font-medium">Clients satisfaits</div>
            </div>
            
            <div class="stats-card text-center p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/15 transition-all duration-300">
                <div class="w-16 h-16 bg-white/20 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <div class="text-4xl font-bold mb-2 text-white">100K+</div>
                <div class="text-lg text-blue-100 font-medium">m² entretenus</div>
            </div>
            
            <div class="stats-card text-center p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/15 transition-all duration-300">
                <div class="w-16 h-16 bg-white/20 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="text-4xl font-bold mb-2 text-white">24/7</div>
                <div class="text-lg text-green-100 font-medium">Disponibilité</div>
            </div>
            
            <div class="stats-card text-center p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/15 transition-all duration-300">
                <div class="w-16 h-16 bg-white/20 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <div class="text-4xl font-bold mb-2 text-white">99%</div>
                <div class="text-lg text-yellow-100 font-medium">Taux de satisfaction</div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="premium-section bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-br from-blue-50 via-cyan-50 to-transparent rounded-full blur-3xl opacity-20"></div>
    
    <div class="max-w-4xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16 fade-in-section">
            <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-full border border-blue-200">
                <span class="text-sm font-bold text-gray-700 tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    FAQ
                </span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Questions <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">Fréquentes</span></h2>
            <p class="text-xl text-gray-600">Tout ce que vous devez savoir sur SABOU-CLEAN</p>
        </div>
        
        <div class="space-y-6">
            <div class="faq-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Quels types d'espaces nettoyez-vous ?</h3>
                        <p class="text-gray-600 leading-relaxed">Bureaux, immeubles, commerces, industries, institutions publiques et tout espace nécessitant un entretien professionnel. Nous adaptons nos méthodes à chaque environnement.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Utilisez-vous des produits écologiques ?</h3>
                        <p class="text-gray-600 leading-relaxed">Oui, nous privilégions les produits respectueux de l'environnement et certifiés, sans compromettre l'efficacité. Notre gamme éco-responsable garantit la sécurité de vos équipes.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Proposez-vous des contrats sur mesure ?</h3>
                        <p class="text-gray-600 leading-relaxed">Absolument. Nous adaptons nos services à vos besoins spécifiques : fréquence, horaires, prestations particulières. Chaque contrat est personnalisé selon votre activité.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="premium-section bg-gradient-to-br from-blue-600 via-blue-700 to-cyan-600 text-white relative overflow-hidden">
    <!-- Éléments décoratifs -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-cyan-400/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
        <div class="fade-in-section">
            <div class="inline-block mb-6 px-6 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                <span class="text-sm font-bold tracking-wide text-white flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    CONTACTEZ-NOUS
                </span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">Besoin d'un service de <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-blue-300">nettoyage professionnel</span> ?</h2>
            <p class="text-xl md:text-2xl mb-10 text-blue-100 max-w-3xl mx-auto">Contactez SABOU-CLEAN pour un devis gratuit et personnalisé. Réponse garantie sous 24h.</p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('contact') }}" class="btn-premium bg-white text-blue-600 inline-block text-lg px-8 py-4 shadow-2xl hover:bg-blue-50">
                    <span class="relative z-10 flex items-center gap-2 justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Demander un Devis
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </span>
                </a>
                <a href="tel:+22670000000" class="btn-premium bg-transparent border-2 border-white text-white inline-block text-lg px-8 py-4 hover:bg-white hover:text-blue-600">
                    <span class="relative z-10 flex items-center gap-2 justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        Appeler Maintenant
                    </span>
                </a>
            </div>
        </div>
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

// Observer les cartes d'équipe
document.querySelectorAll('.team-card').forEach((el, index) => {
    el.style.transitionDelay = `${index * 0.2}s`;
    observer.observe(el);
});

// Observer les cartes de statistiques
document.querySelectorAll('.stats-card').forEach((el, index) => {
    el.style.transitionDelay = `${index * 0.15}s`;
    observer.observe(el);
});

// Observer les cartes FAQ
document.querySelectorAll('.faq-card').forEach((el, index) => {
    el.style.transitionDelay = `${index * 0.1}s`;
    observer.observe(el);
});
</script>
@endsection

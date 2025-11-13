@extends('layouts.app')

@section('title', 'Sabou-Gnouma SARL - Excellence Multiservices en Afrique')

@section('content')
<!-- Espacement pour navbar fixe -->
<div class="h-20"></div>

<!-- Carrousel principal -->
<section class="relative h-[600px] md:h-[700px] overflow-hidden hero-section">
    <div id="carousel" class="relative h-full">
        <!-- Slide 1 - SABOU-CLEAN -->
        <div class="carousel-slide absolute inset-0" style="background-image: url('/images/services/clean/netoyage.JPG'); background-size: cover; background-position: center;">
            <div class="hero-overlay"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-blue-600/70 to-transparent"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-10">
                <div class="hero-content text-white max-w-3xl">
                    <div class="inline-block mb-4 px-4 py-2 bg-blue-500/30 backdrop-blur-sm rounded-full border border-blue-400/50 zoom-in">
                        <span class="text-sm font-semibold tracking-wide">NETTOYAGE PROFESSIONNEL</span>
                    </div>
                    <h1 class="hero-title text-5xl md:text-7xl font-bold mb-6">SABOU-CLEAN</h1>
                    <p class="hero-subtitle text-2xl md:text-3xl mb-6 font-light">Aucun espace n'est trop grand à entretenir.</p>
                    <p class="hero-description text-lg md:text-xl mb-8 text-blue-100">Excellence en propreté et entretien professionnel pour entreprises et institutions</p>
                    <a href="{{ route('services.clean') }}" class="btn-premium bg-white text-blue-600 shadow-2xl">
                        <span class="relative z-10">Découvrir nos services</span>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Slide 2 - SABOU-EVENT -->
        <div class="carousel-slide absolute inset-0 hidden" style="background-image: url('/images/services/event/decoration5.PNG'); background-size: cover; background-position: center;">
            <div class="hero-overlay"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-purple-600/70 to-transparent"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-10">
                <div class="hero-content text-white max-w-3xl">
                    <div class="inline-block mb-4 px-4 py-2 bg-purple-500/30 backdrop-blur-sm rounded-full border border-purple-400/50 zoom-in">
                        <span class="text-sm font-semibold tracking-wide">DÉCORATION ÉVÉNEMENTIELLE</span>
                    </div>
                    <h1 class="hero-title text-5xl md:text-7xl font-bold mb-6">SABOU-EVENT</h1>
                    <p class="hero-subtitle text-2xl md:text-3xl mb-6 font-light">Un lieu vide est une scène en attente de magie.</p>
                    <p class="hero-description text-lg md:text-xl mb-8 text-purple-100">Conception et réalisation d'événements mémorables avec élégance et créativité</p>
                    <a href="{{ route('services.event') }}" class="btn-premium bg-white text-purple-600 shadow-2xl">
                        <span class="relative z-10">Découvrir nos services</span>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Slide 3 - SABOU-FOOD -->
        <div class="carousel-slide absolute inset-0 hidden" style="background-image: url('/images/services/food/restauration.PNG'); background-size: cover; background-position: center;">
            <div class="hero-overlay"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-orange-600/70 to-transparent"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-10">
                <div class="hero-content text-white max-w-3xl">
                    <div class="inline-block mb-4 px-4 py-2 bg-orange-500/30 backdrop-blur-sm rounded-full border border-orange-400/50 zoom-in">
                        <span class="text-sm font-semibold tracking-wide">RESTAURATION PREMIUM</span>
                    </div>
                    <h1 class="hero-title text-5xl md:text-7xl font-bold mb-6">SABOU-FOOD</h1>
                    <p class="hero-subtitle text-2xl md:text-3xl mb-6 font-light">La qualité ne se négocie pas : elle se savoure.</p>
                    <p class="hero-description text-lg md:text-xl mb-8 text-orange-100">Traiteur professionnel haut de gamme pour tous vos événements prestigieux</p>
                    <a href="{{ route('services.food') }}" class="btn-premium bg-white text-orange-600 shadow-2xl">
                        <span class="relative z-10">Découvrir nos services</span>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Slide 4 - SABOU-AGRO -->
        <div class="carousel-slide absolute inset-0 hidden" style="background-image: url('/images/services/agro/cooperation.JPG'); background-size: cover; background-position: center;">
            <div class="hero-overlay"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-green-600/70 to-transparent"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-10">
                <div class="hero-content text-white max-w-3xl">
                    <div class="inline-block mb-4 px-4 py-2 bg-green-500/30 backdrop-blur-sm rounded-full border border-green-400/50 zoom-in">
                        <span class="text-sm font-semibold tracking-wide">AGROBUSINESS DURABLE</span>
                    </div>
                    <h1 class="hero-title text-5xl md:text-7xl font-bold mb-6">SABOU-AGRO</h1>
                    <p class="hero-subtitle text-2xl md:text-3xl mb-6 font-light">Nourrir, c'est aussi préserver l'avenir.</p>
                    <p class="hero-description text-lg md:text-xl mb-8 text-green-100">Projets agricoles intégrés alliant rentabilité et développement durable</p>
                    <a href="{{ route('services.agro') }}" class="btn-premium bg-white text-green-600 shadow-2xl">
                        <span class="relative z-10">Découvrir nos services</span>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Slide 5 - SABOU-ACADEMY -->
        <div class="carousel-slide absolute inset-0 hidden" style="background-image: url('/images/services/event/decoration4.JPG'); background-size: cover; background-position: center;">
            <div class="hero-overlay"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-yellow-600/70 to-transparent"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-10">
                <div class="hero-content text-white max-w-3xl">
                    <div class="inline-block mb-4 px-4 py-2 bg-yellow-500/30 backdrop-blur-sm rounded-full border border-yellow-400/50 zoom-in">
                        <span class="text-sm font-semibold tracking-wide">FORMATION PROFESSIONNELLE</span>
                    </div>
                    <h1 class="hero-title text-5xl md:text-7xl font-bold mb-6">SABOU-ACADEMY</h1>
                    <p class="hero-subtitle text-2xl md:text-3xl mb-6 font-light">Chaque talent mérite d'être révélé.</p>
                    <p class="hero-description text-lg md:text-xl mb-8 text-yellow-100">Programmes de formation certifiants pour développer les compétences de demain</p>
                    <a href="{{ route('services.academy') }}" class="btn-premium bg-white text-yellow-700 shadow-2xl">
                        <span class="relative z-10">Découvrir nos services</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Contrôles carrousel -->
    <button id="prev" class="absolute left-4 md:left-8 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-white/40 text-white p-4 rounded-full backdrop-blur-md transition-all duration-300 hover:scale-110 shadow-lg z-20">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
        </svg>
    </button>
    <button id="next" class="absolute right-4 md:right-8 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-white/40 text-white p-4 rounded-full backdrop-blur-md transition-all duration-300 hover:scale-110 shadow-lg z-20">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
        </svg>
    </button>
    
    <!-- Indicateurs carrousel -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex gap-3 z-20">
        <button class="carousel-indicator w-3 h-3 rounded-full bg-white/50 hover:bg-white/80 transition-all duration-300 active" data-slide="0"></button>
        <button class="carousel-indicator w-3 h-3 rounded-full bg-white/50 hover:bg-white/80 transition-all duration-300" data-slide="1"></button>
        <button class="carousel-indicator w-3 h-3 rounded-full bg-white/50 hover:bg-white/80 transition-all duration-300" data-slide="2"></button>
        <button class="carousel-indicator w-3 h-3 rounded-full bg-white/50 hover:bg-white/80 transition-all duration-300" data-slide="3"></button>
        <button class="carousel-indicator w-3 h-3 rounded-full bg-white/50 hover:bg-white/80 transition-all duration-300" data-slide="4"></button>
    </div>
</section>

<!-- Présentation Sabou-Gnouma -->
<section class="premium-section bg-white relative overflow-hidden">
    <!-- Élément décoratif background -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-blue-50 to-purple-50 rounded-full blur-3xl opacity-30 -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-orange-50 to-yellow-50 rounded-full blur-3xl opacity-30 translate-y-1/2 -translate-x-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center max-w-4xl mx-auto fade-in-section">
            <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-blue-50 to-purple-50 rounded-full border border-blue-200">
                <span class="text-sm font-bold text-gray-700 tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    À PROPOS DE NOUS
                </span>
            </div>
            <h2 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                Sabou-Gnouma <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">SARL</span>
            </h2>
            <p class="text-xl md:text-2xl text-gray-600 mb-6 font-semibold">
                L'Excellence Multiservices en Afrique
            </p>
            <p class="institutional-text leading-relaxed">
                Sabou-Gnouma SARL est une entreprise multiservices africaine haut de gamme, regroupant 5 pôles d'excellence. 
                Nous combinons <span class="font-semibold text-gray-900">discipline africaine</span> et <span class="font-semibold text-gray-900">standards internationaux</span> pour offrir des services premium dans la propreté, 
                l'événementiel, la restauration, l'agrobusiness et la formation. Notre engagement : <span class="font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">la qualité n'est pas négociable</span>.
            </p>
            
            <!-- Valeurs -->
            <div class="mt-12 grid grid-cols-2 md:grid-cols-5 gap-6">
                <div class="value-card bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-4 transform hover:scale-105 transition-all duration-300">
                    <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center mb-2 mx-auto">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div class="font-bold text-gray-900 text-sm">Discipline</div>
                </div>
                <div class="value-card bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-4 transform hover:scale-105 transition-all duration-300">
                    <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center mb-2 mx-auto">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                        </svg>
                    </div>
                    <div class="font-bold text-gray-900 text-sm">Excellence</div>
                </div>
                <div class="value-card bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl p-4 transform hover:scale-105 transition-all duration-300">
                    <div class="w-12 h-12 bg-orange-500 rounded-xl flex items-center justify-center mb-2 mx-auto">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div class="font-bold text-gray-900 text-sm">Innovation</div>
                </div>
                <div class="value-card bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-4 transform hover:scale-105 transition-all duration-300">
                    <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center mb-2 mx-auto">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="font-bold text-gray-900 text-sm">Fiabilité</div>
                </div>
                <div class="value-card bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-xl p-4 transform hover:scale-105 transition-all duration-300">
                    <div class="w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center mb-2 mx-auto">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        </svg>
                    </div>
                    <div class="font-bold text-gray-900 text-sm">Élégance</div>
                </div>
            </div>
            
            <div class="mt-12">
                <a href="{{ route('identity') }}" class="btn-premium bg-gradient-to-r from-blue-600 to-purple-600 text-white shadow-2xl">
                    <span class="relative z-10">Découvrir notre identité</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Nos 5 Services -->
<section class="premium-section bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16 fade-in-section">
            <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-gray-100 to-gray-200 rounded-full border border-gray-300">
                <span class="text-sm font-bold text-gray-700 tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                    NOS SERVICES
                </span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">5 Pôles d'<span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Excellence</span></h2>
            <p class="text-xl text-gray-600">Des solutions premium pour répondre à tous vos besoins professionnels</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- SABOU-CLEAN -->
            <a href="{{ route('services.clean') }}" class="service-card-premium bg-white rounded-2xl shadow-lg overflow-hidden group relative">
                <div class="h-56 relative overflow-hidden">
                    <img src="/images/services/clean/netoyage5.JPG" alt="SABOU-CLEAN" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/50 to-transparent"></div>
                    <div class="absolute top-4 right-4 bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded-full">PREMIUM</div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-blue-600 mb-2 group-hover:text-blue-700 transition-colors">SABOU-CLEAN</h3>
                    <p class="text-gray-700 mb-3 font-medium italic">"Aucun espace n'est trop grand à entretenir."</p>
                    <p class="text-sm text-gray-600">Propreté & Entretien professionnel pour entreprises et institutions</p>
                    <div class="mt-4 flex items-center text-blue-600 font-semibold group-hover:translate-x-2 transition-transform">
                        <span>Découvrir</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>
            
            <!-- SABOU-EVENT -->
            <a href="{{ route('services.event') }}" class="service-card-premium bg-white rounded-2xl shadow-lg overflow-hidden group relative">
                <div class="h-56 relative overflow-hidden">
                    <img src="/images/services/event/decoration3.JPG" alt="SABOU-EVENT" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-purple-900/90 via-purple-900/50 to-transparent"></div>
                    <div class="absolute top-4 right-4 bg-purple-500 text-white text-xs font-bold px-3 py-1 rounded-full">PREMIUM</div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-purple-600 mb-2 group-hover:text-purple-700 transition-colors">SABOU-EVENT</h3>
                    <p class="text-gray-700 mb-3 font-medium italic">"Un lieu vide est une scène en attente de magie."</p>
                    <p class="text-sm text-gray-600">Décoration & Ingénierie événementielle de prestige</p>
                    <div class="mt-4 flex items-center text-purple-600 font-semibold group-hover:translate-x-2 transition-transform">
                        <span>Découvrir</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>
            
            <!-- SABOU-FOOD -->
            <a href="{{ route('services.food') }}" class="service-card-premium bg-white rounded-2xl shadow-lg overflow-hidden group relative">
                <div class="h-56 relative overflow-hidden">
                    <img src="/images/services/food/restauration4.JPG" alt="SABOU-FOOD" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-orange-900/90 via-orange-900/50 to-transparent"></div>
                    <div class="absolute top-4 right-4 bg-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full">PREMIUM</div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-orange-600 mb-2 group-hover:text-orange-700 transition-colors">SABOU-FOOD</h3>
                    <p class="text-gray-700 mb-3 font-medium italic">"La qualité ne se négocie pas : elle se savoure."</p>
                    <p class="text-sm text-gray-600">Restauration & Traiteur professionnel haut de gamme</p>
                    <div class="mt-4 flex items-center text-orange-600 font-semibold group-hover:translate-x-2 transition-transform">
                        <span>Découvrir</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>
            
            <!-- SABOU-AGRO -->
            <a href="{{ route('services.agro') }}" class="service-card-premium bg-white rounded-2xl shadow-lg overflow-hidden group relative">
                <div class="h-56 relative overflow-hidden">
                    <img src="/images/services/agro/cooperation.JPG" alt="SABOU-AGRO" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-green-900/90 via-green-900/50 to-transparent"></div>
                    <div class="absolute top-4 right-4 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">PREMIUM</div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-green-600 mb-2 group-hover:text-green-700 transition-colors">SABOU-AGRO</h3>
                    <p class="text-gray-700 mb-3 font-medium italic">"Nourrir, c'est aussi préserver l'avenir."</p>
                    <p class="text-sm text-gray-600">Agrobusiness & Projets agroalimentaires intégrés</p>
                    <div class="mt-4 flex items-center text-green-600 font-semibold group-hover:translate-x-2 transition-transform">
                        <span>Découvrir</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>
            
            <!-- SABOU-ACADEMY -->
            <a href="{{ route('services.academy') }}" class="service-card-premium bg-white rounded-2xl shadow-lg overflow-hidden group relative md:col-span-2 lg:col-span-1">
                <div class="h-56 relative overflow-hidden">
                    <img src="/images/gallery/IMG_1840.JPG" alt="SABOU-ACADEMY" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-yellow-900/90 via-yellow-900/50 to-transparent"></div>
                    <div class="absolute top-4 right-4 bg-yellow-500 text-white text-xs font-bold px-3 py-1 rounded-full">PREMIUM</div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-yellow-600 mb-2 group-hover:text-yellow-700 transition-colors">SABOU-ACADEMY</h3>
                    <p class="text-gray-700 mb-3 font-medium italic">"Chaque talent mérite d'être révélé."</p>
                    <p class="text-sm text-gray-600">Formation & Développement des compétences</p>
                    <div class="mt-4 flex items-center text-yellow-600 font-semibold group-hover:translate-x-2 transition-transform">
                        <span>Découvrir</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Partenaires -->
<section class="premium-section bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Nos Partenaires</h2>
            <p class="text-xl text-gray-600">Ils nous font confiance</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-5 gap-8 items-center">
            <div class="h-24 bg-gray-100 rounded-lg flex items-center justify-center">
                <span class="text-gray-400 font-bold">GIZ</span>
            </div>
            <div class="h-24 bg-gray-100 rounded-lg flex items-center justify-center">
                <span class="text-gray-400 font-bold">CNIA</span>
            </div>
            <div class="h-24 bg-gray-100 rounded-lg flex items-center justify-center">
                <span class="text-gray-400 font-bold">LCV</span>
            </div>
            <div class="h-24 bg-gray-100 rounded-lg flex items-center justify-center">
                <span class="text-gray-400 font-bold">AFS</span>
            </div>
            <div class="h-24 bg-gray-100 rounded-lg flex items-center justify-center">
                <span class="text-gray-400 font-bold">Partenaire 5</span>
            </div>
        </div>
    </div>
</section>

<!-- Actualités récentes -->
<section class="premium-section bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Dernières Actualités</h2>
            <p class="text-xl text-gray-600">Restez informés de nos dernières réalisations</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="h-48 bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center p-6">
                    <img src="/images/news/innovation-cleaning.svg" alt="Innovation nettoyage" class="w-full h-full object-contain">
                </div>
                <div class="p-6">
                    <div class="text-sm text-gray-500 mb-2">15 Nov 2024</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Nouveau contrat d'entretien majeur</h3>
                    <p class="text-gray-600 mb-4">SABOU-CLEAN décroche un contrat de nettoyage premium pour un complexe de bureaux de 5000m².</p>
                    <a href="{{ route('news') }}" class="text-blue-600 font-semibold hover:underline">Lire plus →</a>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="h-48 bg-gradient-to-br from-purple-100 to-purple-200 flex items-center justify-center p-6">
                    <img src="/images/news/event-success.svg" alt="Succès événementiel" class="w-full h-full object-contain">
                </div>
                <div class="p-6">
                    <div class="text-sm text-gray-500 mb-2">10 Nov 2024</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Gala d'exception organisé</h3>
                    <p class="text-gray-600 mb-4">SABOU-EVENT réalise la décoration et l'organisation d'un gala diplomatique de 500 personnes.</p>
                    <a href="{{ route('news') }}" class="text-purple-600 font-semibold hover:underline">Lire plus →</a>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="h-48 bg-gradient-to-br from-green-100 to-green-200 flex items-center justify-center p-6">
                    <img src="/images/news/agro-development.svg" alt="Développement agro" class="w-full h-full object-contain">
                </div>
                <div class="p-6">
                    <div class="text-sm text-gray-500 mb-2">05 Nov 2024</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Nouveau projet agro-écologique</h3>
                    <p class="text-gray-600 mb-4">SABOU-AGRO lance un projet de culture biologique sur 10 hectares dans la région.</p>
                    <a href="{{ route('news') }}" class="text-green-600 font-semibold hover:underline">Lire plus →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Final -->
<section class="premium-section bg-gradient-to-br from-gray-900 via-blue-900 to-purple-900 text-white relative overflow-hidden">
    <!-- Éléments décoratifs -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-5xl mx-auto px-4 text-center relative z-10">
        <div class="fade-in-section">
            <div class="inline-block mb-6 px-6 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                <span class="text-sm font-bold tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    PASSEZ À L'ACTION
                </span>
            </div>
            <h2 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Prêt à <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">transformer</span> votre projet ?
            </h2>
            <p class="text-xl md:text-2xl mb-10 text-gray-300 max-w-3xl mx-auto">
                Nos experts sont à votre disposition pour discuter de vos besoins et vous proposer des solutions sur mesure
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('contact') }}" class="btn-premium bg-white text-gray-900 inline-block text-lg px-8 py-4 shadow-2xl">
                    <span class="relative z-10 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        Nous Contacter
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </span>
                </a>
                <a href="{{ route('services.clean') }}" class="btn-premium bg-transparent border-2 border-white text-white inline-block text-lg px-8 py-4 hover:bg-white hover:text-gray-900">
                    <span class="relative z-10">Découvrir nos services</span>
                </a>
            </div>
            
            <!-- Stats -->
            <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="stat-item">
                    <div class="text-4xl font-bold text-blue-400 mb-2">5</div>
                    <div class="text-sm text-gray-400">Services Premium</div>
                </div>
                <div class="stat-item">
                    <div class="text-4xl font-bold text-purple-400 mb-2">100+</div>
                    <div class="text-sm text-gray-400">Projets Réalisés</div>
                </div>
                <div class="stat-item">
                    <div class="text-4xl font-bold text-orange-400 mb-2">50+</div>
                    <div class="text-sm text-gray-400">Clients Satisfaits</div>
                </div>
                <div class="stat-item">
                    <div class="text-4xl font-bold text-green-400 mb-2">10+</div>
                    <div class="text-sm text-gray-400">Années d'Expérience</div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Carrousel premium avec transitions fluides
let currentSlide = 0;
const slides = document.querySelectorAll('.carousel-slide');
const indicators = document.querySelectorAll('.carousel-indicator');
let autoPlayInterval;
let isTransitioning = false;

function showSlide(n) {
    if (isTransitioning) return;
    isTransitioning = true;
    
    // Calculer le nouveau slide
    const newSlide = (n + slides.length) % slides.length;
    if (newSlide === currentSlide) {
        isTransitioning = false;
        return;
    }
    
    // Animation de sortie du slide actuel
    slides[currentSlide].style.opacity = '0';
    slides[currentSlide].style.transform = 'scale(1.1)';
    
    setTimeout(() => {
        slides[currentSlide].classList.add('hidden');
        slides[currentSlide].style.opacity = '';
        slides[currentSlide].style.transform = '';
        
        // Préparer le nouveau slide
        currentSlide = newSlide;
        slides[currentSlide].classList.remove('hidden');
        slides[currentSlide].style.opacity = '0';
        slides[currentSlide].style.transform = 'scale(1.1)';
        
        // Animation d'entrée du nouveau slide
        setTimeout(() => {
            slides[currentSlide].style.opacity = '1';
            slides[currentSlide].style.transform = 'scale(1)';
        }, 50);
        
        // Mettre à jour les indicateurs
        indicators.forEach((ind, idx) => {
            if (idx === currentSlide) {
                ind.classList.remove('bg-white/50');
                ind.classList.add('bg-white', 'active', 'scale-125');
            } else {
                ind.classList.remove('bg-white', 'active', 'scale-125');
                ind.classList.add('bg-white/50');
            }
        });
        
        setTimeout(() => {
            isTransitioning = false;
        }, 1000);
    }, 500);
}

// Contrôles
document.getElementById('next')?.addEventListener('click', () => {
    showSlide(currentSlide + 1);
    resetAutoPlay();
});

document.getElementById('prev')?.addEventListener('click', () => {
    showSlide(currentSlide - 1);
    resetAutoPlay();
});

// Indicateurs
indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
        showSlide(index);
        resetAutoPlay();
    });
});

// Auto-play
function startAutoPlay() {
    autoPlayInterval = setInterval(() => showSlide(currentSlide + 1), 6000);
}

function resetAutoPlay() {
    clearInterval(autoPlayInterval);
    startAutoPlay();
}

// Pause sur hover
document.querySelector('#carousel')?.addEventListener('mouseenter', () => {
    clearInterval(autoPlayInterval);
});

document.querySelector('#carousel')?.addEventListener('mouseleave', () => {
    startAutoPlay();
});

// Initialiser
startAutoPlay();

// Support clavier
document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') {
        showSlide(currentSlide - 1);
        resetAutoPlay();
    } else if (e.key === 'ArrowRight') {
        showSlide(currentSlide + 1);
        resetAutoPlay();
    }
});

// Intersection Observer pour animations au scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            // Animation des stats avec compteur
            if (entry.target.classList.contains('stat-item')) {
                animateStats(entry.target);
            }
        }
    });
}, observerOptions);

// Observer tous les éléments fade-in
document.querySelectorAll('.fade-in-section').forEach(el => {
    observer.observe(el);
});

// Observer les cartes de service
document.querySelectorAll('.service-card-premium').forEach((el, index) => {
    el.style.transitionDelay = `${index * 0.1}s`;
    observer.observe(el);
});

// Observer les valeurs
document.querySelectorAll('.value-card').forEach((el, index) => {
    el.style.transitionDelay = `${index * 0.1}s`;
    observer.observe(el);
});

// Observer les stats
document.querySelectorAll('.stat-item').forEach(el => {
    observer.observe(el);
});

// Animation des chiffres des stats
function animateStats(element) {
    const numberEl = element.querySelector('div:first-child');
    const target = numberEl.textContent;
    const isPlus = target.includes('+');
    const numericValue = parseInt(target.replace('+', ''));
    
    let current = 0;
    const increment = numericValue / 50;
    const duration = 1500;
    const stepTime = duration / 50;
    
    const timer = setInterval(() => {
        current += increment;
        if (current >= numericValue) {
            numberEl.textContent = isPlus ? numericValue + '+' : numericValue;
            clearInterval(timer);
        } else {
            numberEl.textContent = Math.floor(current) + (isPlus ? '+' : '');
        }
    }, stepTime);
}
</script>
@endsection

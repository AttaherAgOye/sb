@extends('layouts.app')

@section('title', 'SABOU-AGRO - Agrobusiness & Agroalimentaire')

@section('content')
<div class="h-20"></div>

<!-- Bannière Hero Premium -->
<section class="relative h-[500px] md:h-[600px] overflow-hidden hero-section" style="background-image: url('/images/services/agro/labo.JPG'); background-size: cover; background-position: center;">
    <div class="hero-overlay"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-green-900/80 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-10">
        <div class="hero-content max-w-4xl">
            <div class="inline-block mb-4 px-6 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/30 zoom-in">
                <span class="text-sm font-bold tracking-wide text-white flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                    SERVICE PREMIUM
                </span>
            </div>
            <h1 class="hero-title text-5xl md:text-7xl font-bold mb-6 text-white">SABOU-<span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-emerald-400">AGRO</span></h1>
            <p class="hero-subtitle text-2xl md:text-3xl mb-6 font-light text-white">Nourrir, c'est aussi préserver l'avenir.</p>
            <p class="text-xl mb-8 text-green-100">Agrobusiness & Projets agroalimentaires intégrés</p>
            
            <div class="flex flex-wrap gap-4 mt-8">
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="font-semibold text-white">Agriculture Durable</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    <span class="font-semibold text-white">Qualité Certifiée</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-lime-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                    </svg>
                    <span class="font-semibold text-white">Bio & Naturel</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Présentation du service -->
<section class="premium-section bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-green-50 to-emerald-50 rounded-full blur-3xl opacity-30 -translate-y-1/2 translate-x-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="grid md:grid-cols-2 gap-12 items-center fade-in-section">
            <div>
                <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-green-50 to-emerald-50 rounded-full border border-green-200">
                    <span class="text-sm font-bold text-gray-700 tracking-wide flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        </svg>
                        NOTRE APPROCHE
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Agriculture Durable & <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-emerald-600">Transformation</span></h2>
                <p class="institutional-text mb-4">
                    SABOU-AGRO développe des projets agricoles intégrés combinant production responsable, transformation 
                    et commercialisation de produits agroalimentaires de qualité. Notre approche allie rentabilité et durabilité.
                </p>
                <p class="institutional-text mb-6">
                    De la ferme à la table, nous contrôlons chaque étape pour garantir des produits sains, 
                    traçables et respectueux de l'environnement.
                </p>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-4 rounded-xl border border-green-100">
                        <div class="text-3xl font-bold text-green-600 mb-1">100%</div>
                        <div class="text-sm text-gray-600">Agriculture Bio</div>
                    </div>
                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-4 rounded-xl border border-green-100">
                        <div class="text-3xl font-bold text-green-600 mb-1">15+</div>
                        <div class="text-sm text-gray-600">Hectares Cultivés</div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-500">
                    <img src="/images/services/agro/insemination.JPG" alt="Service SABOU-AGRO" class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-gradient-to-br from-green-400 to-emerald-500 rounded-2xl blur-2xl opacity-30"></div>
            </div>
        </div>
    </div>
</section>

<!-- Nos offres -->
<section class="premium-section bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Nos Activités Agro-industrielles</h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-lg">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <span class="text-3xl">🌾</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Production Agricole</h3>
                <ul class="space-y-3 text-gray-600">
                    <li>✓ Cultures maraîchères bio</li>
                    <li>✓ Production céréalière</li>
                    <li>✓ Arboriculture fruitière</li>
                    <li>✓ Élevage intégré</li>
                </ul>
            </div>
            
            <div class="bg-white p-8 rounded-2xl shadow-lg">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <span class="text-3xl">🏭</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Transformation</h3>
                <ul class="space-y-3 text-gray-600">
                    <li>✓ Unité de transformation</li>
                    <li>✓ Conditionnement moderne</li>
                    <li>✓ Contrôle qualité strict</li>
                    <li>✓ Certification sanitaire</li>
                </ul>
            </div>
            
            <div class="bg-white p-8 rounded-2xl shadow-lg">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <span class="text-3xl">📦</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Distribution</h3>
                <ul class="space-y-3 text-gray-600">
                    <li>✓ Réseau de distribution</li>
                    <li>✓ Livraison B2B</li>
                    <li>✓ Points de vente</li>
                    <li>✓ Export régional</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Équipe -->
<section class="premium-section bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-6">L'Équipe SABOU-AGRO</h2>
        <p class="text-center text-xl text-gray-600 mb-16 max-w-3xl mx-auto">
            Des experts agronomes et techniciens qualifiés pour des projets durables
        </p>
        
        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-32 h-32 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-4xl">👨‍🌾</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Agronomes</h3>
                <p class="text-gray-600">Expertise technique</p>
            </div>
            
            <div class="text-center">
                <div class="w-32 h-32 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-4xl">🔬</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Contrôle Qualité</h3>
                <p class="text-gray-600">Laboratoire d'analyse</p>
            </div>
            
            <div class="text-center">
                <div class="w-32 h-32 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-4xl">🚜</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Exploitants</h3>
                <p class="text-gray-600">Production terrain</p>
            </div>
            
            <div class="text-center">
                <div class="w-32 h-32 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-4xl">📊</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Gestion</h3>
                <p class="text-gray-600">Pilotage projets</p>
            </div>
        </div>
    </div>
</section>

<!-- Impact -->
<section class="premium-section bg-green-600 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16">SABOU-AGRO en Chiffres</h2>
        
        <div class="grid md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-5xl font-bold mb-2">50+</div>
                <div class="text-xl text-green-100">Hectares cultivés</div>
            </div>
            <div>
                <div class="text-5xl font-bold mb-2">100%</div>
                <div class="text-xl text-green-100">Traçabilité</div>
            </div>
            <div>
                <div class="text-5xl font-bold mb-2">20+</div>
                <div class="text-xl text-green-100">Produits transformés</div>
            </div>
            <div>
                <div class="text-5xl font-bold mb-2">0</div>
                <div class="text-xl text-green-100">Pesticides chimiques</div>
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
                <h3 class="text-xl font-bold text-gray-900 mb-3">Vos produits sont-ils certifiés bio ?</h3>
                <p class="text-gray-600">Nous sommes en cours de certification bio. Nos pratiques suivent déjà les normes de l'agriculture biologique.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Livrez-vous aux particuliers ?</h3>
                <p class="text-gray-600">Actuellement, nous nous concentrons sur le B2B (restaurants, hôtels, supermarchés), mais des points de vente sont prévus.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Accompagnez-vous d'autres projets agricoles ?</h3>
                <p class="text-gray-600">Oui, via SABOU-ACADEMY, nous proposons formations et conseils pour porteurs de projets agricoles.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="premium-section bg-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">Un projet agro-industriel ?</h2>
        <p class="text-xl text-gray-600 mb-8">Discutons ensemble de partenariats ou d'approvisionnement</p>
        <a href="{{ route('contact') }}" class="btn-premium bg-green-600 text-white inline-block">Nous Contacter</a>
    </div>
</section>
@endsection

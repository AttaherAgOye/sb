@extends('layouts.app')

@section('title', 'SABOU-AGRO - Agrobusiness & Agroalimentaire')

@section('content')
<div class="h-20"></div>

<!-- Bannière Hero -->
<section class="relative h-96 bg-gradient-to-r from-green-600/90 to-green-800/90 text-white" style="background-image: url('/images/services/agro/labo.JPG'); background-size: cover; background-position: center; background-blend-mode: multiply;">
    <div class="max-w-7xl mx-auto px-4 h-full flex items-center">
        <div class="max-w-3xl">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 drop-shadow-lg">SABOU-AGRO</h1>
            <p class="text-2xl md:text-3xl font-light mb-4 drop-shadow-md">Nourrir, c'est aussi préserver l'avenir.</p>
            <p class="text-lg text-green-100 drop-shadow-md">Agrobusiness & Projets agroalimentaires intégrés</p>
        </div>
    </div>
</section>

<!-- Présentation -->
<section class="premium-section bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Agriculture durable et transformation agroalimentaire</h2>
                <p class="institutional-text mb-4">
                    SABOU-AGRO développe des projets agricoles intégrés combinant production responsable, transformation 
                    et commercialisation de produits agroalimentaires de qualité. Notre approche allie rentabilité et durabilité.
                </p>
                <p class="institutional-text">
                    De la ferme à la table, nous contrôlons chaque étape pour garantir des produits sains, 
                    traçables et respectueux de l'environnement.
                </p>
            </div>
            <div class="bg-green-100 h-96 rounded-2xl overflow-hidden shadow-xl">
                <img src="/images/services/agro/insemination.JPG" alt="Service SABOU-AGRO" class="w-full h-full object-cover">
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

@extends('layouts.app')

@section('title', 'SABOU-FOOD - Restauration & Traiteur Premium')

@section('content')
<div class="h-20"></div>

<!-- Bannière Hero Premium -->
<section class="relative h-[500px] md:h-[600px] overflow-hidden hero-section" style="background-image: url('/images/services/food/buffet.JPG'); background-size: cover; background-position: center;">
    <div class="hero-overlay"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-orange-900/80 to-transparent"></div>
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
                SABOU-<span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-300 to-red-300">FOOD</span>
            </h1>
            <p class="text-2xl md:text-3xl font-light mb-6 text-orange-100 fade-in-delay">La qualité ne se négocie pas : elle se savoure.</p>
            <p class="text-lg text-orange-200 mb-8 fade-in-delay-2">Restauration & Traiteur professionnel haut de gamme</p>
            
            <div class="flex flex-wrap gap-4 mb-8 fade-in-delay-3">
                <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-orange-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-white font-medium">Qualité Premium</span>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-orange-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                    <span class="text-white font-medium">Chefs Expérimentés</span>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-orange-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-white font-medium">Service 24/7</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Présentation -->
<section class="premium-section bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-br from-orange-50 via-red-50 to-transparent rounded-full blur-3xl opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16 fade-in-section">
            <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-orange-50 to-red-50 rounded-full border border-orange-200">
                <span class="text-sm font-bold text-gray-700 tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    EXCELLENCE CULINAIRE
                </span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">L'art culinaire au service de vos <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-red-600">événements</span></h2>
            <p class="text-xl text-gray-600">Saveurs authentiques et créativité gastronomique</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <p class="institutional-text mb-6 leading-relaxed">
                    SABOU-FOOD propose des services de <span class="font-semibold text-gray-900">restauration et traiteur premium</span> pour vos événements professionnels, 
                    réceptions diplomatiques et célébrations privées. Nos chefs allient saveurs locales et cuisine internationale.
                </p>
                <p class="institutional-text mb-8 leading-relaxed">
                    De la gastronomie raffinée aux buffets généreux, nous créons des <span class="font-semibold text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-red-600">expériences culinaires mémorables</span> 
                    avec des produits frais et de qualité supérieure.
                </p>
                
                <!-- Mini statistiques -->
                <div class="grid grid-cols-3 gap-4">
                    <div class="text-center p-4 bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl">
                        <div class="text-2xl font-bold text-orange-600">500+</div>
                        <div class="text-xs text-gray-600 font-medium">Événements</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-red-50 to-red-100 rounded-xl">
                        <div class="text-2xl font-bold text-red-600">50+</div>
                        <div class="text-xs text-gray-600 font-medium">Recettes</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-xl">
                        <div class="text-2xl font-bold text-yellow-600">100%</div>
                        <div class="text-xs text-gray-600 font-medium">Frais</div>
                    </div>
                </div>
            </div>
            <div class="relative h-96 rounded-2xl overflow-hidden shadow-2xl group bg-gradient-to-br from-orange-50 to-red-50 flex items-center justify-center">
                <!-- Animation Lottie FOOD -->
                <div class="lottie-container relative z-10 group-hover:scale-105 transition-transform duration-500">
                    <iframe 
                        src="https://lottie.host/embed/eb7d6c99-f17e-403d-9977-f516b1cdf82a/XuZTQhsN4d.lottie" 
                        style="width: 320px; height: 320px; border: none; background: transparent;" 
                        allowfullscreen>
                    </iframe>
                </div>
                
                <!-- Overlay avec info -->
                <div class="absolute inset-0 bg-gradient-to-t from-orange-600/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-orange-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Gastronomie Premium</h3>
                    <p class="text-orange-100 text-sm">Art culinaire et saveurs d'exception</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nos offres -->
<section class="premium-section bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Nos Services de Restauration</h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-lg">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                    <span class="text-3xl">🍽️</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Traiteur Premium</h3>
                <ul class="space-y-3 text-gray-600">
                    <li>✓ Buffets raffinés</li>
                    <li>✓ Cocktails dînatoires</li>
                    <li>✓ Menus personnalisés</li>
                    <li>✓ Service à l'assiette</li>
                </ul>
            </div>
            
            <div class="bg-white p-8 rounded-2xl shadow-lg">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                    <span class="text-3xl">🏢</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Restauration d'Entreprise</h3>
                <ul class="space-y-3 text-gray-600">
                    <li>✓ Cantines d'entreprise</li>
                    <li>✓ Pause-café & collations</li>
                    <li>✓ Déjeuners de séminaire</li>
                    <li>✓ Plateaux-repas</li>
                </ul>
            </div>
            
            <div class="bg-white p-8 rounded-2xl shadow-lg">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                    <span class="text-3xl">👨‍🍳</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Chef à Domicile</h3>
                <ul class="space-y-3 text-gray-600">
                    <li>✓ Dîners privés</li>
                    <li>✓ Cuisine gastronomique</li>
                    <li>✓ Cours de cuisine</li>
                    <li>✓ Service personnalisé</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Équipe -->
<section class="premium-section bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-6">Notre Brigade Culinaire</h2>
        <p class="text-center text-xl text-gray-600 mb-16 max-w-3xl mx-auto">
            Des chefs passionnés et un personnel de service formé aux plus hauts standards
        </p>
        
        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-32 h-32 bg-orange-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-4xl">👨‍🍳</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Chefs Exécutifs</h3>
                <p class="text-gray-600">Créativité culinaire</p>
            </div>
            
            <div class="text-center">
                <div class="w-32 h-32 bg-orange-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-4xl">🥖</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Pâtissiers</h3>
                <p class="text-gray-600">Desserts d'exception</p>
            </div>
            
            <div class="text-center">
                <div class="w-32 h-32 bg-orange-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-4xl">🍷</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Sommeliers</h3>
                <p class="text-gray-600">Accords parfaits</p>
            </div>
            
            <div class="text-center">
                <div class="w-32 h-32 bg-orange-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-4xl">🤵</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Service</h3>
                <p class="text-gray-600">Excellence protocole</p>
            </div>
        </div>
    </div>
</section>

<!-- Impact / Chiffres clés -->
<section class="premium-section bg-gradient-to-br from-orange-600 via-orange-700 to-red-600 text-white relative overflow-hidden">
    <!-- Éléments décoratifs -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-red-400/10 rounded-full blur-3xl"></div>
    
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
            <h2 class="text-4xl md:text-5xl font-bold mb-4">SABOU-FOOD en <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-300 to-orange-300">Chiffres</span></h2>
            <p class="text-xl text-orange-100 mb-8">L'excellence culinaire en données</p>
            
            <!-- Animation Lottie pour les statistiques -->
            <div class="flex justify-center mb-8">
                <div class="lottie-stats-container" style="opacity: 0.7;">
                    <iframe 
                        src="https://lottie.host/embed/eb7d6c99-f17e-403d-9977-f516b1cdf82a/XuZTQhsN4d.lottie" 
                        style="width: 200px; height: 200px; border: none; background: transparent;" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
        
        <div class="grid md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-5xl font-bold mb-2">10K+</div>
                <div class="text-xl text-orange-100">Repas servis</div>
            </div>
            <div>
                <div class="text-5xl font-bold mb-2">50+</div>
                <div class="text-xl text-orange-100">Recettes signature</div>
            </div>
            <div>
                <div class="text-5xl font-bold mb-2">100%</div>
                <div class="text-xl text-orange-100">Produits frais</div>
            </div>
            <div>
                <div class="text-5xl font-bold mb-2">A+</div>
                <div class="text-xl text-orange-100">Hygiène certifiée</div>
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
                <h3 class="text-xl font-bold text-gray-900 mb-3">Proposez-vous des menus végétariens ou halal ?</h3>
                <p class="text-gray-600">Absolument. Nous adaptons nos menus à toutes les exigences alimentaires : végétarien, végan, halal, sans gluten, etc.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Où sont préparés les repas ?</h3>
                <p class="text-gray-600">Dans notre cuisine professionnelle certifiée aux normes HACCP, garantissant hygiène et qualité optimales.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Proposez-vous des dégustations avant l'événement ?</h3>
                <p class="text-gray-600">Oui, pour les grands événements, nous organisons des séances de dégustation pour valider les menus avec vous.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="premium-section bg-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">Envie d'une expérience culinaire exceptionnelle ?</h2>
        <p class="text-xl text-gray-600 mb-8">Contactez SABOU-FOOD pour un menu sur mesure</p>
        <a href="{{ route('contact') }}" class="btn-premium bg-orange-600 text-white inline-block">Demander un Devis</a>
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

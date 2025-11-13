@extends('layouts.app')

@section('title', 'Partenaires & Clients - Sabou-Gnouma SARL')

@section('content')
<div class="h-20"></div>

<!-- Hero Section Premium -->
<section class="relative h-[500px] md:h-[600px] overflow-hidden hero-section" style="background-image: url('/images/gallery/IMG_1835.JPG'); background-size: cover; background-position: center;">
    <div class="hero-overlay"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-gray-900/80 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-10">
        <div class="hero-content max-w-4xl">
            <div class="inline-block mb-4 px-6 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/30 zoom-in">
                <span class="text-sm font-bold text-white tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    PARTENAIRES & CLIENTS
                </span>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-6 text-white fade-in leading-tight">
                Partenaires & <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-purple-300">Clients</span>
            </h1>
            <p class="text-2xl md:text-3xl font-light mb-6 text-gray-100 fade-in-delay">Ils nous font confiance pour leur excellence</p>
            <p class="text-lg text-gray-200 mb-8 fade-in-delay-2">Des partenariats stratégiques fondés sur la confiance mutuelle</p>
            
            <div class="flex flex-wrap gap-4 mb-8 fade-in-delay-3">
                <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-white font-medium">Confiance Mutuelle</span>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                    </svg>
                    <span class="text-white font-medium">Excellence Partagée</span>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <span class="text-white font-medium">Innovation Continue</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Introduction -->
<section class="premium-section bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-br from-blue-50 via-purple-50 to-transparent rounded-full blur-3xl opacity-20"></div>
    
    <div class="max-w-5xl mx-auto px-4 text-center relative z-10">
        <div class="fade-in-section">
            <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-blue-50 to-purple-50 rounded-full border border-blue-200">
                <span class="text-sm font-bold text-gray-700 tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                    RELATION DE CONFIANCE
                </span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Une Relation de <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Confiance</span></h2>
            <p class="institutional-text leading-relaxed mb-8">
                Sabou-Gnouma SARL est fière de collaborer avec des <span class="font-semibold text-gray-900">entreprises, institutions et organisations de premier plan</span>. 
                Chaque partenariat est fondé sur la <span class="font-semibold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">confiance mutuelle</span>, l'excellence et l'engagement envers la qualité.
            </p>
            
            <!-- Mini statistiques -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
                <div class="text-center p-6 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl">
                    <div class="w-16 h-16 bg-blue-500 rounded-2xl flex items-center justify-center mb-4 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-blue-600 mb-2">50+</div>
                    <div class="text-sm text-gray-600 font-medium">Partenaires Actifs</div>
                </div>
                <div class="text-center p-6 bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl">
                    <div class="w-16 h-16 bg-purple-500 rounded-2xl flex items-center justify-center mb-4 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-purple-600 mb-2">100+</div>
                    <div class="text-sm text-gray-600 font-medium">Projets Réalisés</div>
                </div>
                <div class="text-center p-6 bg-gradient-to-br from-green-50 to-green-100 rounded-2xl">
                    <div class="w-16 h-16 bg-green-500 rounded-2xl flex items-center justify-center mb-4 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-green-600 mb-2">98%</div>
                    <div class="text-sm text-gray-600 font-medium">Satisfaction</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nos Partenaires -->
<section class="premium-section bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Nos Partenaires Stratégiques</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-lg flex items-center justify-center h-32 hover:shadow-2xl transition">
                <span class="text-2xl font-bold text-gray-400">GIZ</span>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg flex items-center justify-center h-32 hover:shadow-2xl transition">
                <span class="text-2xl font-bold text-gray-400">CNIA</span>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg flex items-center justify-center h-32 hover:shadow-2xl transition">
                <span class="text-2xl font-bold text-gray-400">LCV</span>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg flex items-center justify-center h-32 hover:shadow-2xl transition">
                <span class="text-2xl font-bold text-gray-400">AFS</span>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg flex items-center justify-center h-32 hover:shadow-2xl transition">
                <span class="text-2xl font-bold text-gray-400">Partenaire 5</span>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg flex items-center justify-center h-32 hover:shadow-2xl transition">
                <span class="text-2xl font-bold text-gray-400">Partenaire 6</span>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg flex items-center justify-center h-32 hover:shadow-2xl transition">
                <span class="text-2xl font-bold text-gray-400">Partenaire 7</span>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg flex items-center justify-center h-32 hover:shadow-2xl transition">
                <span class="text-2xl font-bold text-gray-400">Partenaire 8</span>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg flex items-center justify-center h-32 hover:shadow-2xl transition">
                <span class="text-2xl font-bold text-gray-400">Partenaire 9</span>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg flex items-center justify-center h-32 hover:shadow-2xl transition">
                <span class="text-2xl font-bold text-gray-400">Partenaire 10</span>
            </div>
        </div>
    </div>
</section>

<!-- Témoignages Clients -->
<section class="premium-section bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-6">Ce que disent nos clients</h2>
        <p class="text-center text-xl text-gray-600 mb-16">Des partenariats basés sur la confiance et la satisfaction</p>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Témoignage 1 -->
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-2xl shadow-lg">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-blue-200 rounded-full flex items-center justify-center mr-4">
                        <span class="text-2xl">👤</span>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Directeur Général</h3>
                        <p class="text-sm text-gray-600">Grande Entreprise BTP</p>
                    </div>
                </div>
                <p class="text-gray-700 italic leading-relaxed">
                    "SABOU-CLEAN assure l'entretien de nos bureaux depuis 2 ans. Leur professionnalisme et leur 
                    ponctualité sont remarquables. Une équipe vraiment fiable et disciplinée."
                </p>
                <div class="mt-4 text-yellow-500">⭐⭐⭐⭐⭐</div>
            </div>
            
            <!-- Témoignage 2 -->
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-2xl shadow-lg">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-purple-200 rounded-full flex items-center justify-center mr-4">
                        <span class="text-2xl">👤</span>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Responsable Événements</h3>
                        <p class="text-sm text-gray-600">ONG Internationale</p>
                    </div>
                </div>
                <p class="text-gray-700 italic leading-relaxed">
                    "SABOU-EVENT a organisé notre gala annuel avec 400 invités. De la décoration au protocole, 
                    tout était parfait. Un niveau de professionnalisme exceptionnel !"
                </p>
                <div class="mt-4 text-yellow-500">⭐⭐⭐⭐⭐</div>
            </div>
            
            <!-- Témoignage 3 -->
            <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-8 rounded-2xl shadow-lg">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-orange-200 rounded-full flex items-center justify-center mr-4">
                        <span class="text-2xl">👤</span>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Directeur des Ressources Humaines</h3>
                        <p class="text-sm text-gray-600">Institution Bancaire</p>
                    </div>
                </div>
                <p class="text-gray-700 italic leading-relaxed">
                    "SABOU-FOOD nous régale chaque jour avec des repas de qualité. Nos employés sont ravis et 
                    la ponctualité du service est exemplaire. Nous recommandons vivement !"
                </p>
                <div class="mt-4 text-yellow-500">⭐⭐⭐⭐⭐</div>
            </div>
        </div>
    </div>
</section>

<!-- Études de Cas -->
<section class="premium-section bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Études de Cas</h2>
        
        <div class="space-y-12">
            <!-- Cas 1 -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="grid md:grid-cols-3">
                    <div class="bg-blue-600 text-white p-8 flex items-center justify-center">
                        <div class="text-center">
                            <div class="text-6xl mb-4">🏢</div>
                            <h3 class="text-2xl font-bold">SABOU-CLEAN</h3>
                        </div>
                    </div>
                    <div class="md:col-span-2 p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Entretien d'un Complexe de Bureaux de 5000m²</h3>
                        <div class="space-y-4">
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Problématique :</h4>
                                <p class="text-gray-600">Le client recherchait un prestataire capable d'assurer un entretien quotidien de haute qualité pour un complexe abritant plusieurs entreprises internationales.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Solution SABOU-CLEAN :</h4>
                                <p class="text-gray-600">Déploiement d'une équipe dédiée de 15 agents, formation spécifique aux normes internationales, utilisation de produits écologiques certifiés.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Résultat :</h4>
                                <p class="text-gray-600">Taux de satisfaction de 98%, renouvellement du contrat sur 3 ans, recommandation à d'autres sites du groupe.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Cas 2 -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="grid md:grid-cols-3">
                    <div class="bg-purple-600 text-white p-8 flex items-center justify-center">
                        <div class="text-center">
                            <div class="text-6xl mb-4">🎭</div>
                            <h3 class="text-2xl font-bold">SABOU-EVENT</h3>
                        </div>
                    </div>
                    <div class="md:col-span-2 p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Organisation d'un Gala Diplomatique de 500 Personnes</h3>
                        <div class="space-y-4">
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Problématique :</h4>
                                <p class="text-gray-600">Organisation d'un événement protocolaire majeur réunissant ambassadeurs, ministres et personnalités avec des exigences très strictes.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Solution SABOU-EVENT :</h4>
                                <p class="text-gray-600">Coordination complète : décoration florale premium, gestion protocolaire, sonorisation, éclairage scénique, collaboration avec SABOU-FOOD pour le traiteur.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Résultat :</h4>
                                <p class="text-gray-600">Événement unanimement salué, félicitations officielles, contrats pour 3 événements institutionnels supplémentaires.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Devenir Partenaire -->
<section class="premium-section bg-gradient-to-r from-gray-900 to-gray-800 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Devenir Partenaire</h2>
        <p class="text-xl mb-8 text-gray-300">
            Rejoignez notre réseau de partenaires prestigieux et bénéficiez de services premium adaptés à vos besoins
        </p>
        <div class="flex justify-center gap-4 flex-wrap">
            <a href="{{ route('contact') }}" class="btn-premium bg-white text-gray-900 inline-block">Contactez-nous</a>
            <a href="{{ route('home') }}" class="btn-premium bg-transparent border-2 border-white text-white inline-block">Découvrir nos services</a>
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

// Observer les cartes de partenaires
document.querySelectorAll('.partner-card').forEach((el, index) => {
    el.style.transitionDelay = `${index * 0.1}s`;
    observer.observe(el);
});
</script>
@endsection

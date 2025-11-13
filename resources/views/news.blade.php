@extends('layouts.app')

@section('title', 'Actualités - Sabou-Gnouma SARL')

@section('content')
<div class="h-20"></div>

<!-- Hero Premium -->
<section class="relative h-[500px] md:h-[600px] overflow-hidden hero-section" style="background-image: url('/images/gallery/IMG_1836.JPG'); background-size: cover; background-position: center;">
    <div class="hero-overlay"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-indigo-900/80 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-10">
        <div class="hero-content max-w-4xl">
            <div class="inline-block mb-4 px-6 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/30 zoom-in">
                <span class="text-sm font-bold text-white tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 0a2 2 0 00-2-2H9m12 0a2 2 0 00-2-2H9m12 0V9a2 2 0 00-2-2H9"/>
                    </svg>
                    ACTUALITÉS & RÉALISATIONS
                </span>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-6 text-white fade-in leading-tight">
                Actualités & <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-300 to-purple-300">Réalisations</span>
            </h1>
            <p class="text-2xl md:text-3xl font-light mb-6 text-indigo-100 fade-in-delay">Suivez nos dernières réalisations et actualités</p>
            <p class="text-lg text-indigo-200 mb-8 fade-in-delay-2">Découvrez nos succès et innovations au quotidien</p>
            
            <div class="flex flex-wrap gap-4 mb-8 fade-in-delay-3">
                <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <span class="text-white font-medium">Innovation Continue</span>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                    </svg>
                    <span class="text-white font-medium">Succès Reconnus</span>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-white font-medium">Actualités Régulières</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Articles -->
<section class="premium-section bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-br from-indigo-50 via-purple-50 to-transparent rounded-full blur-3xl opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16 fade-in-section">
            <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-full border border-indigo-200">
                <span class="text-sm font-bold text-gray-700 tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 0a2 2 0 00-2-2H9m12 0a2 2 0 00-2-2H9m12 0V9a2 2 0 00-2-2H9"/>
                    </svg>
                    DERNIÈRES ACTUALITÉS
                </span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Nos Dernières <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">Réalisations</span></h2>
            <p class="text-xl text-gray-600">Découvrez nos succès récents et nos innovations</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Article 1 -->
            <article class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="h-64 bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center p-6">
                    <img src="/images/news/innovation-cleaning.svg" alt="Innovation nettoyage" class="w-full h-full object-contain">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                        <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full font-semibold">SABOU-CLEAN</span>
                        <span>15 Nov 2024</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">Nouveau contrat d'entretien majeur</h2>
                    <p class="text-gray-600 mb-4">SABOU-CLEAN décroche un contrat de nettoyage premium pour un complexe de bureaux de 5000m² abritant plusieurs entreprises internationales.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Lire plus →</a>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="h-64 bg-gradient-to-br from-purple-100 to-purple-200 flex items-center justify-center p-6">
                    <img src="/images/news/event-success.svg" alt="Succès événementiel" class="w-full h-full object-contain">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                        <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full font-semibold">SABOU-EVENT</span>
                        <span>10 Nov 2024</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">Gala d'exception organisé</h2>
                    <p class="text-gray-600 mb-4">SABOU-EVENT réalise la décoration et l'organisation d'un gala diplomatique de 500 personnes avec un succès unanimement salué.</p>
                    <a href="#" class="text-purple-600 font-semibold hover:underline">Lire plus →</a>
                </div>
            </article>

            <!-- Article 3 -->
            <article class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="h-64 bg-gradient-to-br from-green-100 to-green-200 flex items-center justify-center p-6">
                    <img src="/images/news/agro-development.svg" alt="Développement agro" class="w-full h-full object-contain">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                        <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full font-semibold">SABOU-AGRO</span>
                        <span>05 Nov 2024</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">Nouveau projet agro-écologique</h2>
                    <p class="text-gray-600 mb-4">SABOU-AGRO lance un projet de culture biologique sur 10 hectares dans la région avec des techniques innovantes et durables.</p>
                    <a href="#" class="text-green-600 font-semibold hover:underline">Lire plus →</a>
                </div>
            </article>

            <!-- Article 4 -->
            <article class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="h-64 bg-gradient-to-br from-orange-100 to-orange-200"></div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                        <span class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full font-semibold">SABOU-FOOD</span>
                        <span>28 Oct 2024</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">Certification qualité obtenue</h2>
                    <p class="text-gray-600 mb-4">SABOU-FOOD obtient la certification HACCP pour ses cuisines professionnelles, renforçant son engagement qualité.</p>
                    <a href="#" class="text-orange-600 font-semibold hover:underline">Lire plus →</a>
                </div>
            </article>

            <!-- Article 5 -->
            <article class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="h-64 bg-gradient-to-br from-yellow-100 to-yellow-200"></div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                        <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full font-semibold">SABOU-ACADEMY</span>
                        <span>20 Oct 2024</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">Nouvelle promotion diplômée</h2>
                    <p class="text-gray-600 mb-4">30 apprenants reçoivent leur diplôme en hôtellerie-restauration avec un taux d'insertion professionnelle de 90%.</p>
                    <a href="#" class="text-yellow-600 font-semibold hover:underline">Lire plus →</a>
                </div>
            </article>

            <!-- Article 6 -->
            <article class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="h-64 bg-gradient-to-br from-gray-100 to-gray-200"></div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                        <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full font-semibold">Sabou-Gnouma</span>
                        <span>15 Oct 2024</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">Partenariat stratégique signé</h2>
                    <p class="text-gray-600 mb-4">Sabou-Gnouma SARL signe un partenariat avec une grande institution pour des services multiservices intégrés.</p>
                    <a href="#" class="text-gray-600 font-semibold hover:underline">Lire plus →</a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="premium-section bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">Vous souhaitez en savoir plus ?</h2>
        <p class="text-xl text-gray-600 mb-8">Contactez-nous pour découvrir comment nous pouvons vous accompagner</p>
        <a href="{{ route('contact') }}" class="btn-premium bg-gray-900 text-white inline-block">Nous Contacter</a>
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

// Observer les articles
document.querySelectorAll('article').forEach((el, index) => {
    el.style.transitionDelay = `${index * 0.15}s`;
    observer.observe(el);
});
</script>
@endsection

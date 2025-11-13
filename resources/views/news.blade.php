@extends('layouts.app')

@section('title', 'Actualités - Sabou-Gnouma SARL')

@section('content')
<div class="h-20"></div>

<!-- Hero -->
<section class="relative h-96 bg-gradient-to-r from-gray-900 to-gray-700 text-white">
    <div class="max-w-7xl mx-auto px-4 h-full flex items-center">
        <div class="max-w-3xl">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Actualités</h1>
            <p class="text-2xl font-light">Suivez nos dernières réalisations et actualités</p>
        </div>
    </div>
</section>

<!-- Articles -->
<section class="premium-section bg-white">
    <div class="max-w-7xl mx-auto px-4">
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
@endsection

@extends('layouts.app')

@section('title', 'Partenaires & Clients - Sabou-Gnouma SARL')

@section('content')
<div class="h-20"></div>

<!-- Hero Section -->
<section class="relative h-96 bg-gradient-to-r from-gray-900 to-gray-700 text-white">
    <div class="max-w-7xl mx-auto px-4 h-full flex items-center">
        <div class="max-w-3xl">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Partenaires & Clients</h1>
            <p class="text-2xl font-light">Ils nous font confiance pour leur excellence</p>
        </div>
    </div>
</section>

<!-- Introduction -->
<section class="premium-section bg-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">Une Relation de Confiance</h2>
        <p class="institutional-text">
            Sabou-Gnouma SARL est fière de collaborer avec des entreprises, institutions et organisations de premier plan. 
            Chaque partenariat est fondé sur la confiance mutuelle, l'excellence et l'engagement envers la qualité.
        </p>
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
@endsection

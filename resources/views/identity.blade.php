@extends('layouts.app')

@section('title', 'Notre Identité - Sabou-Gnouma SARL')

@section('content')
<div class="h-20"></div>

<!-- Hero Section -->
<section class="relative h-[500px] md:h-[600px] overflow-hidden hero-section" style="background-image: url('/images/gallery/IMG_1834.JPG'); background-size: cover; background-position: center;">
    <div class="hero-overlay"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-gray-900/80 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-10">
        <div class="hero-content max-w-3xl">
            <div class="inline-block mb-4 px-6 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/30 zoom-in">
                <span class="text-sm font-bold tracking-wide text-white flex items-center gap-2">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                    QUI SOMMES-NOUS
                </span>
            </div>
            <h1 class="hero-title text-5xl md:text-7xl font-bold mb-6 text-white">Notre <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Identité</span></h1>
            <p class="hero-subtitle text-2xl md:text-3xl mb-6 font-light text-white">L'excellence africaine au service de vos ambitions</p>
            <div class="flex flex-wrap gap-4 mt-8">
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="font-semibold text-white">Discipline</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                    <span class="font-semibold text-white">Excellence</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                    <span class="font-semibold text-white">Innovation</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    <span class="font-semibold text-white">Fiabilité</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                    </svg>
                    <span class="font-semibold text-white">Élégance</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Historique -->
<section class="premium-section bg-white relative overflow-hidden">
    <!-- Backgrounds décoratifs -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-blue-50 to-purple-50 rounded-full blur-3xl opacity-30 -translate-y-1/2 translate-x-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="grid md:grid-cols-2 gap-12 items-center fade-in-section">
            <div>
                <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-blue-50 to-purple-50 rounded-full border border-blue-200">
                    <span class="text-sm font-bold text-gray-700 tracking-wide flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        NOTRE HISTOIRE
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Un Parcours d'<span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Excellence</span></h2>
                <p class="institutional-text mb-4 leading-relaxed">
                    Sabou-Gnouma SARL est née de la <span class="font-semibold text-gray-900">volonté de professionnaliser</span> des services longtemps considérés comme secondaires en Afrique – 
                    le <span class="font-semibold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">nettoyage, la décoration, la restauration, l'agrobusiness et la formation</span>.
                </p>
                <p class="institutional-text mb-4 leading-relaxed">
                    Fondée sur l'<span class="font-semibold text-gray-900">exigence et la discipline</span>, l'entreprise s'est rapidement imposée comme une 
                    <span class="font-semibold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">référence locale</span> en proposant des solutions premium, 
                    inspirées des standards internationaux mais adaptées aux réalités africaines.
                </p>
                <p class="institutional-text leading-relaxed">
                    Aujourd'hui, Sabou-Gnouma SARL s'affirme comme un <span class="font-semibold text-gray-900">leader multiservices premium</span> 
                    qui transforme la perception des services traditionnels en Afrique de l'Ouest, avec un engagement constant envers l'excellence et l'innovation.
                </p>
                
                <!-- Stats mini -->
                <div class="grid grid-cols-3 gap-4 mt-8">
                    <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl">
                        <div class="text-3xl font-bold text-blue-600">5</div>
                        <div class="text-sm text-gray-600 font-medium">Pôles</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl">
                        <div class="text-3xl font-bold text-purple-600">6</div>
                        <div class="text-sm text-gray-600 font-medium">Années</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl">
                        <div class="text-3xl font-bold text-orange-600">2018</div>
                        <div class="text-sm text-gray-600 font-medium">Fondation</div>
                    </div>
                </div>
            </div>
            <div class="relative h-96 rounded-2xl overflow-hidden shadow-2xl group">
                <img src="/images/gallery/IMG_1848.JPG" alt="Sabou-Gnouma Team" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-transparent to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-3">
                        <svg class="w-8 h-8 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">L'emblème Sabou-Gnouma</h3>
                    <p class="text-gray-200">Le béret : symbole de discipline et d'élégance africaine</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Frise Chronologique -->
<section class="premium-section bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[1000px] h-[1000px] bg-gradient-to-br from-blue-50 via-purple-50 to-orange-50 rounded-full blur-3xl opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16 fade-in-section">
            <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-blue-50 to-purple-50 rounded-full border border-blue-200">
                <span class="text-sm font-bold text-gray-700 tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    NOTRE ÉVOLUTION
                </span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">6 Années d'<span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Innovation</span></h2>
            <p class="text-xl text-gray-600">De la vision à la référence régionale</p>
        </div>

        <!-- Timeline -->
        <div class="relative">
            <!-- Ligne centrale -->
            <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-blue-500 via-purple-500 to-orange-500 rounded-full"></div>
            
            <!-- Étapes -->
            <div class="space-y-12">
                <!-- 2018 - Fondation -->
                <div class="timeline-item flex items-center relative">
                    <div class="w-1/2 pr-8 text-right">
                        <div class="bg-white rounded-2xl p-6 shadow-lg border-l-4 border-blue-500 hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                            <div class="text-3xl font-bold text-blue-600 mb-2">2018</div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Fondation</h3>
                            <p class="text-gray-600">Naissance de Sabou-Gnouma SARL avec la vision de professionnaliser les services traditionnels</p>
                        </div>
                    </div>
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-blue-500 rounded-full border-4 border-white shadow-lg z-10"></div>
                    <div class="w-1/2 pl-8"></div>
                </div>

                <!-- 2019 - Sabou-Clean -->
                <div class="timeline-item flex items-center relative">
                    <div class="w-1/2 pr-8"></div>
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-purple-500 rounded-full border-4 border-white shadow-lg z-10"></div>
                    <div class="w-1/2 pl-8">
                        <div class="bg-white rounded-2xl p-6 shadow-lg border-r-4 border-purple-500 hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                            <div class="text-3xl font-bold text-purple-600 mb-2">2019</div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Lancement de Sabou-Clean</h3>
                            <p class="text-gray-600">Premier pôle opérationnel : révolution du secteur de la propreté et de l'entretien</p>
                        </div>
                    </div>
                </div>

                <!-- 2020 - Sabou-Event & Sabou-Food -->
                <div class="timeline-item flex items-center relative">
                    <div class="w-1/2 pr-8 text-right">
                        <div class="bg-white rounded-2xl p-6 shadow-lg border-l-4 border-orange-500 hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                            <div class="text-3xl font-bold text-orange-600 mb-2">2020</div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Création de Sabou-Event et Sabou-Food</h3>
                            <p class="text-gray-600">Expansion vers l'événementiel premium et la restauration haut de gamme</p>
                        </div>
                    </div>
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-orange-500 rounded-full border-4 border-white shadow-lg z-10"></div>
                    <div class="w-1/2 pl-8"></div>
                </div>

                <!-- 2022 - Sabou-Agro -->
                <div class="timeline-item flex items-center relative">
                    <div class="w-1/2 pr-8"></div>
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-green-500 rounded-full border-4 border-white shadow-lg z-10"></div>
                    <div class="w-1/2 pl-8">
                        <div class="bg-white rounded-2xl p-6 shadow-lg border-r-4 border-green-500 hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                            <div class="text-3xl font-bold text-green-600 mb-2">2022</div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Extension vers Sabou-Agro</h3>
                            <p class="text-gray-600">Diversification dans l'agrobusiness et la coopération agricole moderne</p>
                        </div>
                    </div>
                </div>

                <!-- 2023 - Sabou-Academy -->
                <div class="timeline-item flex items-center relative">
                    <div class="w-1/2 pr-8 text-right">
                        <div class="bg-white rounded-2xl p-6 shadow-lg border-l-4 border-indigo-500 hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                            <div class="text-3xl font-bold text-indigo-600 mb-2">2023</div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Naissance de Sabou-Academy</h3>
                            <p class="text-gray-600">Lancement du pôle formation pour transmettre l'excellence et les savoir-faire</p>
                        </div>
                    </div>
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-indigo-500 rounded-full border-4 border-white shadow-lg z-10"></div>
                    <div class="w-1/2 pl-8"></div>
                </div>

                <!-- 2024 - Référence régionale -->
                <div class="timeline-item flex items-center relative">
                    <div class="w-1/2 pr-8"></div>
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full border-4 border-white shadow-2xl z-10 animate-pulse"></div>
                    <div class="w-1/2 pl-8">
                        <div class="bg-gradient-to-br from-yellow-50 to-orange-50 rounded-2xl p-6 shadow-2xl border-r-4 border-gradient-to-b border-yellow-500 hover:shadow-3xl transition-all duration-300 hover:-translate-y-1">
                            <div class="text-3xl font-bold bg-gradient-to-r from-yellow-600 to-orange-600 bg-clip-text text-transparent mb-2">2024</div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Référence Régionale Multiservices Premium</h3>
                            <p class="text-gray-600 font-medium">Consécration comme leader incontournable des services premium en Afrique de l'Ouest</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="premium-section bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-orange-50 to-yellow-50 rounded-full blur-3xl opacity-30 translate-y-1/2 -translate-x-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16 fade-in-section">
            <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-gray-100 to-gray-200 rounded-full border border-gray-300">
                <span class="text-sm font-bold text-gray-700 tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    NOTRE DIRECTION
                </span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Mission & <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Vision</span></h2>
            <p class="text-xl text-gray-600">Les fondations de notre engagement</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Mission -->
            <div class="mission-card bg-gradient-to-br from-blue-600 to-blue-800 text-white p-12 rounded-2xl shadow-2xl relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                <div class="absolute bottom-0 left-0 w-40 h-40 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/2"></div>
                
                <div class="relative z-10">
                    <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Notre Mission</h2>
                    <p class="text-xl leading-relaxed text-blue-50">
                        Offrir des <span class="font-bold text-white">services premium</span> avec discipline et élégance, en combinant l'authenticité africaine 
                        et les standards internationaux pour répondre aux besoins de nos clients avec <span class="font-bold text-white">excellence</span>.
                    </p>
                </div>
            </div>
            
            <!-- Vision -->
            <div class="vision-card bg-gradient-to-br from-purple-600 to-purple-800 text-white p-12 rounded-2xl shadow-2xl relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                <div class="absolute bottom-0 left-0 w-40 h-40 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/2"></div>
                
                <div class="relative z-10">
                    <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Notre Vision</h2>
                    <p class="text-xl leading-relaxed text-purple-50">
                        Devenir la <span class="font-bold text-white">référence multiservices premium</span> en Afrique de l'Ouest d'ici <span class="font-bold text-white">2030</span>, 
                        reconnue pour son professionnalisme, son innovation et son impact positif sur les communautés.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Valeurs Fondamentales -->
<section class="premium-section bg-white relative overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-br from-blue-50 via-purple-50 to-orange-50 rounded-full blur-3xl opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16 fade-in-section">
            <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-blue-50 to-purple-50 rounded-full border border-blue-200">
                <span class="text-sm font-bold text-gray-700 tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                    NOS VALEURS
                </span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-center text-gray-900 mb-6">Les Piliers de notre <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Excellence</span></h2>
            <p class="text-center text-xl text-gray-600 max-w-3xl mx-auto">
                5 valeurs fondamentales qui guident chacune de nos actions et décisions
            </p>
        </div>
        
        <div class="grid md:grid-cols-5 gap-6">
            <!-- Discipline -->
            <div class="value-card text-center p-6 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl mx-auto mb-4 flex items-center justify-center shadow-lg hover:scale-110 transition-transform">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-3">Discipline</h3>
                <p class="text-gray-700 text-sm font-medium">Rigueur et respect des engagements dans chaque prestation</p>
            </div>
            
            <!-- Excellence -->
            <div class="value-card text-center p-6 bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl mx-auto mb-4 flex items-center justify-center shadow-lg hover:scale-110 transition-transform">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-purple-900 mb-3">Excellence</h3>
                <p class="text-gray-700 text-sm font-medium">La qualité n'est pas négociable : elle est notre standard</p>
            </div>
            
            <!-- Innovation -->
            <div class="value-card text-center p-6 bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl mx-auto mb-4 flex items-center justify-center shadow-lg hover:scale-110 transition-transform">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-orange-900 mb-3">Innovation</h3>
                <p class="text-gray-700 text-sm font-medium">Amélioration continue et adoption des meilleures pratiques</p>
            </div>
            
            <!-- Fiabilité -->
            <div class="value-card text-center p-6 bg-gradient-to-br from-green-50 to-green-100 rounded-2xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl mx-auto mb-4 flex items-center justify-center shadow-lg hover:scale-110 transition-transform">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-green-900 mb-3">Fiabilité</h3>
                <p class="text-gray-700 text-sm font-medium">Partenaire de confiance pour des relations durables</p>
            </div>
            
            <!-- Élégance -->
            <div class="value-card text-center p-6 bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-2xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl mx-auto mb-4 flex items-center justify-center shadow-lg hover:scale-110 transition-transform">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-yellow-900 mb-3">Élégance</h3>
                <p class="text-gray-700 text-sm font-medium">Raffinement et prestance dans chaque détail</p>
            </div>
        </div>
    </div>
</section>

<!-- Emblème : Le Béret Sabou-Gnouma -->
<section class="premium-section bg-gradient-to-br from-gray-900 via-blue-900 to-purple-900 text-white relative overflow-hidden">
    <!-- Éléments décoratifs -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="grid md:grid-cols-2 gap-12 items-center fade-in-section">
            <div class="text-center relative">
                <div class="inline-block relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full blur-2xl opacity-50 group-hover:opacity-70 transition-opacity"></div>
                    <div class="relative w-32 h-32 mx-auto mb-6 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-2xl">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Le Béret Sabou-Gnouma</h3>
                <p class="text-gray-400 mt-2">Symbole d'excellence et de fierté</p>
            </div>
            <div>
                <div class="inline-block mb-4 px-6 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <span class="text-sm font-bold tracking-wide text-white flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        NOTRE EMBLÈME
                    </span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Un Symbole de <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Prestige</span></h2>
                <p class="text-xl leading-relaxed mb-6 text-gray-300">
                    Le béret est bien plus qu'un simple accessoire : il incarne la <span class="font-bold text-white">discipline</span>, l'<span class="font-bold text-white">élégance</span> et la <span class="font-bold text-white">fierté</span> 
                    qui caractérisent l'identité Sabou-Gnouma.
                </p>
                <p class="text-xl leading-relaxed mb-6 text-gray-300">
                    Symbole d'appartenance et de professionnalisme, il rappelle à chaque membre de notre équipe 
                    l'engagement envers l'<span class="font-bold text-white">excellence</span> et le respect des valeurs qui nous unissent.
                </p>
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6">
                    <p class="text-xl leading-relaxed italic text-white">
                        "Porter le béret Sabou-Gnouma, c'est représenter une marque de prestige, 
                        un engagement envers la qualité et une promesse d'excellence africaine."
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Engagement Qualité -->
<section class="premium-section bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-bl from-blue-50 via-purple-50 to-transparent rounded-full blur-3xl opacity-40"></div>
    
    <div class="max-w-5xl mx-auto px-4 text-center relative z-10 fade-in-section">
        <div class="bg-gradient-to-br from-blue-600 to-purple-600 p-1 rounded-3xl shadow-2xl">
            <div class="bg-white p-12 rounded-3xl">
                <div class="inline-block mb-6 px-8 py-3 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full">
                    <span class="text-white font-bold text-sm tracking-wide flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        NOTRE PROMESSE
                    </span>
                </div>
                <h2 class="text-4xl md:text-6xl font-bold text-gray-900 mb-8">
                    Notre Engagement <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Qualité</span>
                </h2>
                <div class="bg-gradient-to-r from-blue-50 to-purple-50 p-8 rounded-2xl mb-8">
                    <p class="text-3xl md:text-4xl font-bold text-gray-900 italic leading-relaxed">
                        "La qualité, chez Sabou-Gnouma,<br/>n'est pas négociable."
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-6 text-left">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">Standards Élevés</h3>
                            <p class="text-gray-600">Maintenir l'excellence dans chaque service</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">Formation Continue</h3>
                            <p class="text-gray-600">Développer les compétences de nos équipes</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">Écoute Client</h3>
                            <p class="text-gray-600">Comprendre et anticiper les besoins</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">Innovation Constante</h3>
                            <p class="text-gray-600">Dépasser les attentes systématiquement</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="premium-section bg-gradient-to-br from-gray-900 via-blue-900 to-purple-900 text-white relative overflow-hidden">
    <!-- Éléments décoratifs -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-5xl mx-auto px-4 text-center relative z-10">
        <div class="fade-in-section">
            <div class="inline-block mb-6 px-6 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                <span class="text-sm font-bold tracking-wide text-white flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    REJOIGNEZ-NOUS
                </span>
            </div>
            <h2 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Rejoignez l'Excellence <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Sabou-Gnouma</span>
            </h2>
            <p class="text-xl md:text-2xl mb-10 text-gray-300 max-w-3xl mx-auto">
                Découvrez nos services premium et devenez partenaire d'une entreprise qui place la <span class="font-bold text-white">qualité</span> au cœur de tout
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4 mb-12">
                <a href="{{ route('contact') }}" class="btn-premium bg-white text-gray-900 inline-block text-lg px-8 py-4 shadow-2xl">
                    <span class="relative z-10 flex items-center gap-2 justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        Nous Contacter
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </span>
                </a>
                <a href="{{ route('partners') }}" class="btn-premium bg-transparent border-2 border-white text-white inline-block text-lg px-8 py-4 hover:bg-white hover:text-gray-900">
                    <span class="relative z-10">Découvrir nos partenaires</span>
                </a>
            </div>
            
            <!-- Mini stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-16">
                <div class="text-center">
                    <div class="text-4xl font-bold text-blue-400 mb-2">5</div>
                    <div class="text-sm text-gray-400">Services</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-purple-400 mb-2">6</div>
                    <div class="text-sm text-gray-400">Années</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-orange-400 mb-2">2018</div>
                    <div class="text-sm text-gray-400">Fondation</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-green-400 mb-2">50+</div>
                    <div class="text-sm text-gray-400">Clients</div>
                </div>
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

// Observer tous les éléments fade-in
document.querySelectorAll('.fade-in-section').forEach(el => {
    observer.observe(el);
});

// Observer les cartes de valeurs avec délais échelonnés
document.querySelectorAll('.value-card').forEach((el, index) => {
    el.style.transitionDelay = `${index * 0.1}s`;
    observer.observe(el);
});

// Observer les cartes mission/vision
document.querySelectorAll('.mission-card, .vision-card').forEach((el, index) => {
    el.style.transitionDelay = `${index * 0.2}s`;
    observer.observe(el);
});

// Observer les éléments de timeline avec délais échelonnés
document.querySelectorAll('.timeline-item').forEach((el, index) => {
    el.style.transitionDelay = `${index * 0.3}s`;
    observer.observe(el);
});
</script>
@endsection


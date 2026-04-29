@extends('layouts.app')

@section('title', 'Carrières – Rejoignez SABOUGNOUMA')
@section('description', 'Découvrez les offres d\'emploi de SABOUGNOUMA et rejoignez une équipe dynamique au service de l\'excellence multiservices.')

@section('content')

{{-- Hero Section --}}
<section class="relative bg-gradient-to-br from-indigo-900 via-indigo-800 to-indigo-600 pt-32 pb-24 overflow-hidden">
    {{-- Decorative Elements --}}
    <div class="absolute inset-0 z-0">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-white/[0.05] rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-10 w-72 h-72 bg-indigo-500/[0.2] rounded-full blur-2xl"></div>
        <!-- Grid Pattern Overlay -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTAgMjBoMjBWMEgweiIgZmlsbD0ibm9uZSIvPjxwYXRoIGQ9Ik0xOSAxOS41SDE5LjVWMThoLS41djEuNXpNMTEgMTkuNWgxLjVWMThIMTF2MS41ek0zIDE5LjVoMS41VjE4SDN2MS41eloiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4wNSkiLz48L3N2Zz4=')] opacity-30"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-full px-5 py-2 mb-8 animate-fade-in-down">
            <i class="fas fa-briefcase text-indigo-300 text-sm"></i>
            <span class="text-indigo-100 text-sm font-semibold tracking-wide uppercase">Offres d'emploi</span>
        </div>
        
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight animate-fade-in-up">
            Rejoignez l'équipe <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-300 to-purple-300">SABOUGNOUMA</span>
        </h1>
        
        <p class="text-lg md:text-xl text-indigo-100/90 max-w-2xl mx-auto mb-10 leading-relaxed animate-fade-in-up animation-delay-100">
            Nous recherchons des talents passionnés pour construire ensemble l'avenir de l'excellence multiservices au Mali et au-delà.
        </p>
        
        <div class="flex flex-wrap gap-4 justify-center animate-fade-in-up animation-delay-200">
            <span class="bg-white/10 border border-white/20 text-indigo-50 px-5 py-2.5 rounded-full text-sm font-medium backdrop-blur-sm shadow-xl flex items-center gap-2">
                <i class="fas fa-map-marker-alt text-indigo-300"></i> Siège : Bamako, Mali
            </span>
            <span class="bg-white/10 border border-white/20 text-indigo-50 px-5 py-2.5 rounded-full text-sm font-medium backdrop-blur-sm shadow-xl flex items-center gap-2">
                <i class="fas fa-star text-yellow-300"></i> {{ $jobOffers->count() }} opportunité(s)
            </span>
        </div>
    </div>
</section>

{{-- Offres Section --}}
<section class="bg-gray-50/50 py-20 relative">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-12 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Postes ouverts</h2>
            <div class="w-16 h-1.5 bg-indigo-600 mx-auto rounded-full"></div>
        </div>

        @if($jobOffers->count() > 0)
            <div class="grid gap-6">
                @foreach($jobOffers as $offer)
                <article class="bg-white rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 p-6 md:p-8 flex flex-col md:flex-row gap-6 items-start transition-all duration-300 transform hover:-translate-y-1 group relative overflow-hidden">
                    
                    {{-- Hover gradient border effect --}}
                    <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-indigo-500 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                    {{-- Icon Badge --}}
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-indigo-100 to-purple-100 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300 shadow-inner">
                        <i class="fas fa-briefcase text-2xl text-indigo-600"></i>
                    </div>

                    {{-- Content --}}
                    <div class="flex-1 w-full">
                        <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-4 mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-indigo-600 transition-colors">{{ $offer->title }}</h3>
                                <div class="flex flex-wrap gap-4 text-sm text-gray-500">
                                    @if($offer->department)
                                        <span class="flex items-center gap-1.5"><i class="fas fa-sitemap text-indigo-400"></i> {{ $offer->department }}</span>
                                    @endif
                                    @if($offer->location)
                                        <span class="flex items-center gap-1.5"><i class="fas fa-map-marker-alt text-indigo-400"></i> {{ $offer->location }}</span>
                                    @endif
                                </div>
                            </div>

                            {{-- Type Badge --}}
                            @if($offer->type)
                            @php
                                $typeClasses = match($offer->type) {
                                    'CDI' => 'bg-emerald-100 text-emerald-700 ring-emerald-600/20',
                                    'CDD' => 'bg-blue-100 text-blue-700 ring-blue-600/20',
                                    'Stage' => 'bg-amber-100 text-amber-700 ring-amber-600/20',
                                    'Freelance' => 'bg-purple-100 text-purple-700 ring-purple-600/20',
                                    default => 'bg-gray-100 text-gray-700 ring-gray-600/20'
                                };
                            @endphp
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold {{ $typeClasses }} ring-1 ring-inset shadow-sm self-start whitespace-nowrap">
                                {{ $offer->type }}
                            </span>
                            @endif
                        </div>

                        @if($offer->description)
                        <p class="text-gray-600 text-base leading-relaxed mb-6 line-clamp-2">
                            {{ Str::limit(strip_tags($offer->description), 160) }}
                        </p>
                        @elseif($offer->documents && count($offer->documents) > 0)
                        <p class="text-gray-500 text-sm italic mb-6">
                            <i class="fas fa-paperclip mr-1"></i> {{ count($offer->documents) }} document(s) joint(s) — voir les détails
                        </p>
                        @else
                        <p class="text-gray-400 text-sm italic mb-6">Consultez les détails de l'offre pour plus d'informations.</p>
                        @endif

                        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 border-t border-gray-100">
                            <div>
                                @if($offer->deadline)
                                    <span class="text-sm font-medium flex items-center gap-1.5 {{ $offer->is_expired ? 'text-red-500 badge-pulse' : 'text-gray-500' }}">
                                        <i class="fas fa-clock {{ $offer->is_expired ? 'text-red-500' : 'text-indigo-400' }}"></i>
                                        Limite : {{ $offer->deadline->format('d M Y') }}
                                        @if($offer->is_expired) <span class="text-xs uppercase tracking-wider ml-1">(Expirée)</span> @endif
                                    </span>
                                @else
                                    <span class="text-sm text-gray-400">Ouvert en continu</span>
                                @endif
                            </div>
                            
                            <a href="{{ route('careers.show', $offer) }}"
                               class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-2.5 bg-indigo-600 text-white text-sm font-semibold rounded-xl hover:bg-indigo-700 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200">
                                Détails & Postuler <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        @else
            <div class="text-center py-16 px-6 bg-white rounded-3xl border border-gray-100 shadow-sm max-w-2xl mx-auto">
                <div class="w-24 h-24 mx-auto rounded-full bg-indigo-50 flex items-center justify-center mb-6 shadow-inner">
                    <i class="fas fa-search text-4xl text-indigo-400"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Aucune offre pour le moment</h3>
                <p class="text-gray-500 text-lg mb-8 max-w-md mx-auto">Nous n'avons actuellement pas de poste ouvert, mais notre équipe grandit vite. Revenez nous voir !</p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-gray-900 text-white font-medium rounded-xl hover:bg-indigo-600 hover:shadow-xl transition-all duration-300">
                    <i class="fas fa-paper-plane"></i> Envoyer une candidature spontanée
                </a>
            </div>
        @endif
    </div>
</section>

{{-- Call to action spontanée (si des offres existent) --}}
@if($jobOffers->count() > 0)
<section class="min-h-[400px] relative flex items-center py-20 overflow-hidden bg-slate-900">
    <div class="absolute inset-0 z-0 opacity-20">
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600"></div>
        <div class="absolute w-full h-full bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] mix-blend-overlay"></div>
    </div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6">Le poste idéal n'est pas dans la liste ?</h2>
        <p class="text-lg text-slate-300 mb-10 max-w-2xl mx-auto">Nous sommes en constante recherche de talents d'exception pour accompagner notre forte croissance. Faites le premier pas !</p>
        <a href="{{ route('contact') }}"
           class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-indigo-900 text-lg font-bold rounded-xl shadow-2xl hover:bg-indigo-50 hover:scale-105 transition-all duration-300 group">
            <i class="fas fa-rocket text-indigo-500 group-hover:animate-bounce"></i> Candidature spontanée
        </a>
    </div>
</section>
@endif

<style>
    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
        transform: translateY(20px);
    }
    .animate-fade-in-down {
        animation: fadeInDown 0.8s ease-out forwards;
        opacity: 0;
        transform: translateY(-20px);
    }
    .animation-delay-100 { animation-delay: 100ms; }
    .animation-delay-200 { animation-delay: 200ms; }
    
    @keyframes fadeInUp {
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInDown {
        to { opacity: 1; transform: translateY(0); }
    }
</style>

@endsection

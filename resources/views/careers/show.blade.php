@extends('layouts.app')

@section('title', $jobOffer->title . ' – SABOUGNOUMA')
@section('description', \Illuminate\Support\Str::limit(strip_tags($jobOffer->description), 150))

@section('content')

{{-- En-tête de l'offre --}}
<section class="relative bg-gradient-to-br from-indigo-950 via-indigo-900 to-indigo-800 pt-32 pb-20 overflow-hidden">
    {{-- Decorative Elements --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-indigo-500/[0.15] rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-10 w-72 h-72 bg-purple-500/[0.1] rounded-full blur-2xl"></div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <a href="{{ route('careers') }}" 
           class="inline-flex items-center text-indigo-200 hover:text-white mb-8 transition-colors group text-sm font-medium">
            <i class="fas fa-arrow-left mr-2 transform group-hover:-translate-x-1 transition-transform"></i> Retour aux opportunités
        </a>
        
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white mb-6 leading-tight animate-fade-in-up">
            {{ $jobOffer->title }}
        </h1>
        
        <div class="flex flex-wrap gap-4 items-center animate-fade-in-up animation-delay-100">
            @if($jobOffer->type)
            @php
                $typeClasses = match($jobOffer->type) {
                    'CDI' => 'bg-emerald-500/20 text-emerald-300 border-emerald-500/30',
                    'CDD' => 'bg-blue-500/20 text-blue-300 border-blue-500/30',
                    'Stage' => 'bg-amber-500/20 text-amber-300 border-amber-500/30',
                    'Freelance' => 'bg-purple-500/20 text-purple-300 border-purple-500/30',
                    default => 'bg-gray-500/20 text-gray-300 border-gray-500/30'
                };
            @endphp
            <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-semibold border backdrop-blur-sm {{ $typeClasses }}">
                {{ $jobOffer->type }}
            </span>
            @endif
            
            @if($jobOffer->department)
                <span class="flex items-center text-indigo-100/80 text-sm">
                    <i class="fas fa-sitemap mr-2 opacity-70"></i> {{ $jobOffer->department }}
                </span>
            @endif

            @if($jobOffer->location)
            <span class="flex items-center text-indigo-100/80 text-sm">
                <i class="fas fa-map-marker-alt mr-2 opacity-70"></i> {{ $jobOffer->location }}
            </span>
            @endif
            
            @if($jobOffer->deadline)
                <span class="flex items-center text-indigo-100/80 text-sm {{ $jobOffer->is_expired ? 'text-red-300' : '' }}">
                    <i class="fas fa-clock mr-2 opacity-70"></i> Limite: {{ $jobOffer->deadline->format('d M Y') }}
                </span>
            @endif
        </div>
    </div>
</section>

{{-- Contenu & Formulaire --}}
<section class="bg-slate-50 py-16 lg:py-24 relative">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        @if(session('success'))
            <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-6 py-4 rounded-xl mb-10 flex items-center gap-4 shadow-sm animate-fade-in">
                <div class="bg-emerald-100 p-2 rounded-full text-emerald-600">
                    <i class="fas fa-check-circle text-xl"></i>
                </div>
                <div>
                    <h4 class="font-bold text-emerald-900">Candidature envoyée !</h4>
                    <p class="text-sm mt-0.5">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        <div class="flex flex-col lg:flex-row gap-10 xl:gap-16">
            
            {{-- Description Column --}}
            <div class="flex-1 lg:max-w-[55%]">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-10 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-1.5 h-20 bg-indigo-600"></div>
                    
                    @if($jobOffer->description)
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-3">
                        Description du poste
                    </h2>

                    <div class="prose prose-indigo max-w-none text-gray-600 leading-relaxed mb-10 text-base">
                        {!! nl2br(e($jobOffer->description)) !!}
                    </div>
                    @endif

                    @if($jobOffer->requirements)
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 border-t border-gray-100 pt-10 flex items-center gap-3">
                            Profil recherché
                        </h2>
                        <div class="prose prose-indigo max-w-none text-gray-600 leading-relaxed text-base">
                            {!! nl2br(e($jobOffer->requirements)) !!}
                        </div>
                    @endif

                    @if($jobOffer->documents && count($jobOffer->documents) > 0)
                        <div class="{{ $jobOffer->description || $jobOffer->requirements ? 'border-t border-gray-100 pt-10 mt-10' : '' }}">
                            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3">
                                <i class="fas fa-paperclip text-indigo-400 text-xl"></i> Documents de l'offre
                            </h2>
                            <p class="text-sm text-gray-500 mb-4">Consultez les documents ci-dessous pour plus de détails sur le poste.</p>
                            <div class="space-y-3">
                                @foreach($jobOffer->documents as $doc)
                                <a href="{{ Storage::url($doc['path']) }}" target="_blank"
                                   class="flex items-center gap-4 p-4 bg-indigo-50 hover:bg-indigo-100 border border-indigo-100 rounded-xl transition-all group">
                                    <div class="w-10 h-10 bg-indigo-100 group-hover:bg-indigo-200 rounded-lg flex items-center justify-center flex-shrink-0 transition-colors">
                                        <i class="fas fa-file-alt text-indigo-500"></i>
                                    </div>
                                    <span class="flex-1 text-sm font-semibold text-indigo-800 truncate">{{ $doc['name'] }}</span>
                                    <span class="flex items-center gap-1.5 text-xs font-medium text-indigo-600 flex-shrink-0">
                                        <i class="fas fa-download"></i> Télécharger
                                    </span>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if(!$jobOffer->description && !$jobOffer->requirements && (!$jobOffer->documents || count($jobOffer->documents) === 0))
                        <p class="text-gray-500 italic text-sm">Aucune description disponible pour cette offre. Contactez-nous pour plus d'informations.</p>
                    @endif
                </div>
                
                {{-- Partager l'offre --}}
                <div class="mt-8 flex items-center gap-4">
                    <span class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Partager l'offre :</span>
                    <button class="w-10 h-10 rounded-full flex items-center justify-center bg-white border border-gray-200 text-gray-600 hover:text-indigo-600 hover:border-indigo-200 shadow-sm transition-colors" title="Partager">
                        <i class="fas fa-share-alt"></i>
                    </button>
                    <button class="w-10 h-10 rounded-full flex items-center justify-center bg-white border border-gray-200 text-blue-600 hover:bg-blue-50 shadow-sm transition-colors" title="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </button>
                </div>
            </div>

            {{-- Application Form Column --}}
            <div class="w-full lg:w-[45%]">
                <div class="bg-white rounded-2xl shadow-xl shadow-indigo-100/50 border border-indigo-50 p-8 md:p-10 sticky top-28 z-20">
                    
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Postuler maintenant</h3>
                        <p class="text-gray-500 text-sm">Faites le premier pas, rejoignez une équipe d'excellence.</p>
                    </div>

                    @if($jobOffer->is_expired)
                        <div class="bg-red-50 text-red-800 p-6 rounded-xl text-center border border-red-100 shadow-sm">
                            <div class="w-12 h-12 bg-red-100 text-red-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-clock text-xl"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-1">Désolé, cette offre a expiré.</h4>
                            <p class="text-sm text-red-600/80">Nous n'acceptons plus de nouvelles candidatures pour ce poste.</p>
                            <a href="{{ route('careers') }}" class="mt-4 inline-block text-sm font-semibold text-red-700 hover:underline">
                                Voir les autres offres →
                            </a>
                        </div>
                    @else
                        <form action="{{ route('careers.apply', $jobOffer) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                            @csrf
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Prénom <span class="text-red-500">*</span></label>
                                    <input type="text" name="first_name" required value="{{ old('first_name') }}" 
                                           class="w-full bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 block p-3 transition-all placeholder-gray-400" placeholder="Jean">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Nom <span class="text-red-500">*</span></label>
                                    <input type="text" name="last_name" required value="{{ old('last_name') }}" 
                                           class="w-full bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 block p-3 transition-all placeholder-gray-400" placeholder="Dupont">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1.5">Email <span class="text-red-500">*</span></label>
                                <input type="email" name="email" required value="{{ old('email') }}" 
                                       class="w-full bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 block p-3 transition-all placeholder-gray-400" placeholder="jean.dupont@email.com">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1.5">Téléphone</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}" 
                                       class="w-full bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 block p-3 transition-all placeholder-gray-400" placeholder="+223 XX XX XX XX">
                            </div>

                            {{-- File Uploads (CV & Lettre) --}}
                            <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 space-y-5">
                                
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Curriculum Vitae (CV) <span class="text-red-500">*</span></label>
                                    <div class="flex items-center gap-3">
                                        <div class="flex-shrink-0 bg-white border border-gray-200 p-2.5 rounded-lg text-indigo-500">
                                            <i class="fas fa-file-pdf"></i>
                                        </div>
                                        <input type="file" name="cv" required accept=".pdf,.doc,.docx" 
                                               class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 cursor-pointer">
                                    </div>
                                    <p class="mt-1.5 text-xs text-gray-500">PDF, DOC ou DOCX. Max 5MB et clair.</p>
                                </div>

                                <div class="pt-4 border-t border-gray-200/60">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Lettre de motivation <span class="text-gray-400 font-normal ml-1">(Optionnel)</span></label>
                                    <div class="flex items-center gap-3">
                                        <div class="flex-shrink-0 bg-white border border-gray-200 p-2.5 rounded-lg text-indigo-400">
                                            <i class="fas fa-file-alt"></i>
                                        </div>
                                        <input type="file" name="cover_letter" accept=".pdf,.doc,.docx" 
                                               class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200 cursor-pointer">
                                    </div>
                                </div>
                                
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1.5">Un petit mot pour vous démarquer ? <span class="text-gray-400 font-normal ml-1">(Optionnel)</span></label>
                                <textarea name="message" rows="3" 
                                          class="w-full bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 block p-3 transition-all resize-y placeholder-gray-400" placeholder="Je pense être le candidat idéal car...">{{ old('message') }}</textarea>
                            </div>

                            @if($errors->any())
                                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl text-sm shadow-sm">
                                    <div class="flex items-center gap-2 font-bold mb-1">
                                        <i class="fas fa-exclamation-circle text-red-500"></i> Veuillez corriger les erreurs :
                                    </div>
                                    <ul class="list-disc pl-6 space-y-1 ml-1 marker:text-red-400">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <button type="submit" 
                                    class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-indigo-600 to-indigo-700 text-white font-bold py-4 px-6 rounded-xl hover:shadow-lg hover:shadow-indigo-600/30 hover:-translate-y-0.5 transition-all duration-200 pt-4 pb-4 focus:ring-4 focus:ring-indigo-200">
                                Envoyer ma candidature <i class="fas fa-paper-plane ml-1"></i>
                            </button>
                            <p class="text-center text-xs text-gray-400 mt-4">
                                En postulant, vous confirmez que vos informations sont exactes.
                            </p>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
        transform: translateY(20px);
    }
    .animation-delay-100 { animation-delay: 100ms; }
    
    @keyframes fadeInUp {
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
        animation: fadeIn 0.5s ease-out forwards;
    }
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
</style>

@endsection

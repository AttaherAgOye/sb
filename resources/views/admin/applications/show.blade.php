@extends('admin.layout')

@section('title', 'Candidature de ' . $application->full_name)
@section('header', 'Détail de la candidature')

@section('content')
<div class="mb-4">
    <a href="{{ route('admin.applications.index') }}"
       class="inline-flex items-center text-gray-600 hover:text-gray-900 text-sm">
        <i class="fas fa-arrow-left mr-2"></i> Retour aux candidatures
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    {{-- Informations candidat --}}
    <div class="lg:col-span-2 space-y-6">
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-user text-indigo-500 mr-2"></i> Informations du candidat
            </h3>
            <dl class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                <div>
                    <dt class="text-gray-500 font-medium">Nom complet</dt>
                    <dd class="text-gray-900 mt-1">{{ $application->full_name }}</dd>
                </div>
                <div>
                    <dt class="text-gray-500 font-medium">Email</dt>
                    <dd class="mt-1"><a href="mailto:{{ $application->email }}" class="text-indigo-600 hover:underline">{{ $application->email }}</a></dd>
                </div>
                @if($application->phone)
                <div>
                    <dt class="text-gray-500 font-medium">Téléphone</dt>
                    <dd class="text-gray-900 mt-1">{{ $application->phone }}</dd>
                </div>
                @endif
                <div>
                    <dt class="text-gray-500 font-medium">Reçue le</dt>
                    <dd class="text-gray-900 mt-1">{{ $application->created_at->format('d/m/Y à H:i') }}</dd>
                </div>
            </dl>
        </div>

        @if($application->message)
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                <i class="fas fa-comment-alt text-indigo-500 mr-2"></i> Message du candidat
            </h3>
            <p class="text-gray-700 whitespace-pre-line">{{ $application->message }}</p>
        </div>
        @endif

        {{-- Documents --}}
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-paperclip text-indigo-500 mr-2"></i> Documents
            </h3>
            <div class="space-y-3">
                <a href="{{ $application->cv_url }}" target="_blank"
                   class="flex items-center p-4 bg-indigo-50 rounded-lg hover:bg-indigo-100 transition-colors group">
                    <div class="p-2 bg-indigo-600 rounded-lg text-white mr-3">
                        <i class="fas fa-file-pdf"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium text-gray-900 group-hover:text-indigo-700">Curriculum Vitae (CV)</p>
                        <p class="text-xs text-gray-500">Cliquez pour ouvrir</p>
                    </div>
                    <i class="fas fa-download text-indigo-600"></i>
                </a>

                @if($application->cover_letter_url)
                <a href="{{ $application->cover_letter_url }}" target="_blank"
                   class="flex items-center p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-colors group">
                    <div class="p-2 bg-green-600 rounded-lg text-white mr-3">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium text-gray-900 group-hover:text-green-700">Lettre de motivation</p>
                        <p class="text-xs text-gray-500">Cliquez pour ouvrir</p>
                    </div>
                    <i class="fas fa-download text-green-600"></i>
                </a>
                @else
                <div class="flex items-center p-4 bg-gray-50 rounded-lg text-gray-400">
                    <i class="fas fa-file-alt mr-3"></i>
                    <span class="text-sm">Pas de lettre de motivation</span>
                </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Sidebar --}}
    <div class="space-y-6">
        {{-- Offre concernée --}}
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="font-semibold text-gray-800 mb-3">Offre concernée</h3>
            <p class="font-medium text-indigo-700">{{ $application->jobOffer->title }}</p>
            <p class="text-sm text-gray-500 mt-1">{{ $application->jobOffer->type }} · {{ $application->jobOffer->location }}</p>
            <a href="{{ route('admin.job-offers.show', $application->jobOffer) }}"
               class="mt-3 inline-flex items-center text-sm text-indigo-600 hover:underline">
                Voir l'offre →
            </a>
        </div>

        {{-- Changer le statut --}}
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="font-semibold text-gray-800 mb-4">Statut actuel</h3>
            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $application->status_badge_class }} mb-4">
                {{ $application->status_label }}
            </span>
            <form action="{{ route('admin.applications.update-status', $application) }}" method="POST">
                @csrf @method('PATCH')
                <label class="block text-sm font-medium text-gray-700 mb-2">Modifier le statut</label>
                <select name="status" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-indigo-500 mb-3">
                    <option value="nouveau" {{ $application->status === 'nouveau' ? 'selected' : '' }}>Nouveau</option>
                    <option value="en_cours" {{ $application->status === 'en_cours' ? 'selected' : '' }}>En cours</option>
                    <option value="accepte" {{ $application->status === 'accepte' ? 'selected' : '' }}>Accepté</option>
                    <option value="refuse" {{ $application->status === 'refuse' ? 'selected' : '' }}>Refusé</option>
                </select>
                <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors text-sm font-medium">
                    Enregistrer
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

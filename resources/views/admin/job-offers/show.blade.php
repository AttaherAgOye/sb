@extends('admin.layout')

@section('title', $jobOffer->title)
@section('header', $jobOffer->title)

@section('content')
<div class="mb-4 flex gap-3">
    <a href="{{ route('admin.job-offers.edit', $jobOffer) }}"
       class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
        <i class="fas fa-edit mr-2"></i> Modifier
    </a>
    <a href="{{ route('admin.job-offers.index') }}"
       class="inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">
        <i class="fas fa-arrow-left mr-2"></i> Retour
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    {{-- Détail de l'offre --}}
    <div class="lg:col-span-2 space-y-6">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-start justify-between mb-4">
                <div>
                    <h2 class="text-xl font-bold text-gray-900">{{ $jobOffer->title }}</h2>
                    @if($jobOffer->department)
                        <p class="text-gray-500 text-sm">{{ $jobOffer->department }}</p>
                    @endif
                </div>
                @if($jobOffer->is_active)
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                @else
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">Inactive</span>
                @endif
            </div>

            <div class="flex flex-wrap gap-3 mb-6 text-sm text-gray-600">
                <span><i class="fas fa-map-marker-alt mr-1 text-indigo-500"></i> {{ $jobOffer->location }}</span>
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $jobOffer->type_badge_class }}">{{ $jobOffer->type }}</span>
                @if($jobOffer->deadline)
                    <span class="{{ $jobOffer->is_expired ? 'text-red-600' : '' }}">
                        <i class="fas fa-calendar mr-1"></i> Limite : {{ $jobOffer->deadline->format('d/m/Y') }}
                    </span>
                @endif
            </div>

            <h3 class="font-semibold text-gray-800 mb-2">Description</h3>
            <div class="text-gray-700 whitespace-pre-line mb-6">{{ $jobOffer->description }}</div>

            @if($jobOffer->requirements)
                <h3 class="font-semibold text-gray-800 mb-2">Profil recherché</h3>
                <div class="text-gray-700 whitespace-pre-line">{{ $jobOffer->requirements }}</div>
            @endif
        </div>
    </div>

    {{-- Statistiques --}}
    <div class="space-y-6">
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="font-semibold text-gray-800 mb-4">Candidatures reçues</h3>
            <p class="text-4xl font-bold text-indigo-600 mb-1">{{ $applications->total() }}</p>
            <p class="text-sm text-gray-500">{{ $applications->where('status', 'nouveau')->count() ?? '' }} nouvelle(s)</p>
            <a href="{{ route('admin.applications.index', ['offer' => $jobOffer->id]) }}"
               class="mt-4 inline-flex items-center text-sm text-indigo-600 hover:underline">
                Voir toutes les candidatures →
            </a>
        </div>

        {{-- Dernières candidatures --}}
        @if($applications->count() > 0)
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="font-semibold text-gray-800 mb-4">Dernières candidatures</h3>
            <div class="space-y-3">
                @foreach($applications->take(5) as $app)
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-900">{{ $app->full_name }}</p>
                        <p class="text-xs text-gray-500">{{ $app->created_at->format('d/m/Y') }}</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium {{ $app->status_badge_class }}">
                            {{ $app->status_label }}
                        </span>
                        <a href="{{ route('admin.applications.show', $app) }}" class="text-indigo-600 hover:text-indigo-900">
                            <i class="fas fa-eye text-xs"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>
@endsection

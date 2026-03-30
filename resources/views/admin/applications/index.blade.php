@extends('admin.layout')

@section('title', 'Candidatures')
@section('header', 'Gestion des Candidatures')

@section('content')
{{-- Filtres --}}
<div class="bg-white rounded-lg shadow p-4 mb-6">
    <form action="{{ route('admin.applications.index') }}" method="GET" class="flex flex-wrap gap-4 items-end">
        <div class="flex-1 min-w-[200px]">
            <label class="block text-sm font-medium text-gray-700 mb-1">Offre d'emploi</label>
            <select name="offer" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-indigo-500">
                <option value="">Toutes les offres</option>
                @foreach($jobOffers as $offer)
                    <option value="{{ $offer->id }}" {{ request('offer') == $offer->id ? 'selected' : '' }}>
                        {{ $offer->title }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="min-w-[160px]">
            <label class="block text-sm font-medium text-gray-700 mb-1">Statut</label>
            <select name="status" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-indigo-500">
                <option value="">Tous les statuts</option>
                <option value="nouveau" {{ request('status') === 'nouveau' ? 'selected' : '' }}>Nouveau</option>
                <option value="en_cours" {{ request('status') === 'en_cours' ? 'selected' : '' }}>En cours</option>
                <option value="accepte" {{ request('status') === 'accepte' ? 'selected' : '' }}>Accepté</option>
                <option value="refuse" {{ request('status') === 'refuse' ? 'selected' : '' }}>Refusé</option>
            </select>
        </div>
        <div class="flex gap-2">
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 text-sm">
                <i class="fas fa-filter mr-1"></i> Filtrer
            </button>
            <a href="{{ route('admin.applications.index') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 text-sm">
                Réinitialiser
            </a>
        </div>
    </form>
</div>

@if($applications->count() > 0)
<div class="bg-white rounded-lg shadow overflow-hidden">
    <div class="px-6 py-4 border-b flex justify-between items-center">
        <p class="text-sm text-gray-600">{{ $applications->total() }} candidature(s) trouvée(s)</p>
    </div>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Candidat</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Offre</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Statut</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($applications as $application)
            <tr class="hover:bg-gray-50">
                <td class="px-6 py-4">
                    <div class="text-sm font-medium text-gray-900">{{ $application->full_name }}</div>
                    <div class="text-sm text-gray-500">{{ $application->email }}</div>
                </td>
                <td class="px-6 py-4 text-sm text-gray-700">
                    <a href="{{ route('admin.job-offers.show', $application->jobOffer) }}" class="hover:text-indigo-600">
                        {{ $application->jobOffer->title }}
                    </a>
                </td>
                <td class="px-6 py-4 text-sm text-gray-500">{{ $application->created_at->format('d/m/Y') }}</td>
                <td class="px-6 py-4">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $application->status_badge_class }}">
                        {{ $application->status_label }}
                    </span>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('admin.applications.show', $application) }}"
                       class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">
                        Voir détail →
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="px-6 py-4 border-t">{{ $applications->links() }}</div>
</div>
@else
<div class="bg-white rounded-lg shadow p-12 text-center">
    <i class="fas fa-inbox text-5xl text-gray-300 mb-4"></i>
    <p class="text-gray-500">Aucune candidature pour le moment.</p>
</div>
@endif
@endsection

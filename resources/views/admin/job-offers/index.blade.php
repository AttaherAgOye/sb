@extends('admin.layout')

@section('title', 'Offres d\'emploi')
@section('header', 'Gestion des Offres d\'emploi')

@section('content')
<div class="flex justify-between items-center mb-6">
    <p class="text-gray-600">{{ $jobOffers->total() }} offre(s) au total</p>
    <a href="{{ route('admin.job-offers.create') }}"
       class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
        <i class="fas fa-plus mr-2"></i> Nouvelle offre
    </a>
</div>

@if($jobOffers->count() > 0)
<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Poste</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Lieu</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date limite</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Candidatures</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($jobOffers as $offer)
            <tr class="hover:bg-gray-50">
                <td class="px-6 py-4">
                    <div class="text-sm font-medium text-gray-900">{{ $offer->title }}</div>
                    @if($offer->department)
                        <div class="text-sm text-gray-500">{{ $offer->department }}</div>
                    @endif
                </td>
                <td class="px-6 py-4">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $offer->type_badge_class }}">
                        {{ $offer->type_label }}
                    </span>
                </td>
                <td class="px-6 py-4 text-sm text-gray-700">{{ $offer->location }}</td>
                <td class="px-6 py-4 text-sm">
                    @if($offer->deadline)
                        <span class="{{ $offer->is_expired ? 'text-red-600 font-medium' : 'text-gray-700' }}">
                            {{ $offer->deadline->format('d/m/Y') }}
                            @if($offer->is_expired) <i class="fas fa-exclamation-circle ml-1" title="Expirée"></i> @endif
                        </span>
                    @else
                        <span class="text-gray-400">—</span>
                    @endif
                </td>
                <td class="px-6 py-4 text-sm text-gray-700">
                    <a href="{{ route('admin.job-offers.show', $offer) }}" class="text-indigo-600 hover:underline font-medium">
                        {{ $offer->applications()->count() }}
                    </a>
                </td>
                <td class="px-6 py-4">
                    @if($offer->is_active)
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <i class="fas fa-circle mr-1 text-xs"></i> Active
                        </span>
                    @else
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                            Inactive
                        </span>
                    @endif
                </td>
                <td class="px-6 py-4 text-right text-sm space-x-2">
                    <a href="{{ route('admin.job-offers.show', $offer) }}"
                       class="text-gray-600 hover:text-gray-900" title="Voir"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('admin.job-offers.edit', $offer) }}"
                       class="text-indigo-600 hover:text-indigo-900" title="Modifier"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('admin.job-offers.destroy', $offer) }}" method="POST" class="inline"
                          onsubmit="return confirm('Supprimer cette offre ?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900" title="Supprimer">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="px-6 py-4 border-t">{{ $jobOffers->links() }}</div>
</div>
@else
<div class="bg-white rounded-lg shadow p-12 text-center">
    <i class="fas fa-briefcase text-5xl text-gray-300 mb-4"></i>
    <h3 class="text-lg font-medium text-gray-700 mb-2">Aucune offre d'emploi</h3>
    <p class="text-gray-500 mb-6">Créez votre première offre pour attirer des candidats.</p>
    <a href="{{ route('admin.job-offers.create') }}"
       class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
        <i class="fas fa-plus mr-2"></i> Créer une offre
    </a>
</div>
@endif
@endsection

@extends('admin.layout')

@section('title', 'Gestion des Actualités')
@section('header', 'Gestion des Actualités')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <div>
        <h3 class="text-lg font-medium text-gray-900">Liste des Actualités</h3>
        <p class="text-sm text-gray-600">Gérez toutes vos actualités depuis cette interface</p>
    </div>
    <a href="{{ route('admin.news.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
        <i class="fas fa-plus mr-2"></i>
        Nouvelle Actualité
    </a>
</div>

@if($news->count() > 0)
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actualité
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Catégorie
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Statut
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Date
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vues
                        </th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($news as $article)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    @if($article->image)
                                        <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="w-12 h-12 rounded-lg object-cover mr-4">
                                    @else
                                        <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center mr-4">
                                            <i class="fas fa-image text-gray-400"></i>
                                        </div>
                                    @endif
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-900">{{ $article->title }}</h4>
                                        <p class="text-sm text-gray-500">{{ Str::limit($article->excerpt, 60) }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    {{ ucfirst($article->category) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center space-x-2">
                                    @if($article->is_published)
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            <i class="fas fa-check-circle mr-1"></i>
                                            Publié
                                        </span>
                                    @else
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                            <i class="fas fa-edit mr-1"></i>
                                            Brouillon
                                        </span>
                                    @endif
                                    @if($article->is_featured)
                                        <i class="fas fa-star text-yellow-500" title="À la une"></i>
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $article->formatted_date }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="flex items-center">
                                    <i class="fas fa-eye mr-1"></i>
                                    {{ $article->views_count }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex items-center justify-end space-x-2">
                                    <a href="{{ route('news.show', $article->slug) }}" target="_blank" class="text-blue-600 hover:text-blue-900" title="Voir">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.news.edit', $article) }}" class="text-indigo-600 hover:text-indigo-900" title="Modifier">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.news.destroy', $article) }}" method="POST" class="inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette actualité ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" title="Supprimer">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Pagination -->
    @if($news->hasPages())
        <div class="mt-6">
            {{ $news->links() }}
        </div>
    @endif
@else
    <div class="bg-white rounded-lg shadow p-12 text-center">
        <i class="fas fa-newspaper text-6xl text-gray-300 mb-6"></i>
        <h3 class="text-xl font-medium text-gray-900 mb-2">Aucune actualité</h3>
        <p class="text-gray-600 mb-6">Commencez par créer votre première actualité</p>
        <a href="{{ route('admin.news.create') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
            <i class="fas fa-plus mr-2"></i>
            Créer une actualité
        </a>
    </div>
@endif
@endsection

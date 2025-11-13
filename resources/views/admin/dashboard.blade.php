@extends('admin.layout')

@section('title', 'Tableau de bord')
@section('header', 'Tableau de bord')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Actualités -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                <i class="fas fa-newspaper text-2xl"></i>
            </div>
            <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-700">Total Actualités</h3>
                <p class="text-3xl font-bold text-blue-600">{{ $stats['total_news'] }}</p>
            </div>
        </div>
    </div>
    
    <!-- Actualités Publiées -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-green-100 text-green-600">
                <i class="fas fa-check-circle text-2xl"></i>
            </div>
            <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-700">Publiées</h3>
                <p class="text-3xl font-bold text-green-600">{{ $stats['published_news'] }}</p>
            </div>
        </div>
    </div>
    
    <!-- Actualités À la Une -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                <i class="fas fa-star text-2xl"></i>
            </div>
            <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-700">À la Une</h3>
                <p class="text-3xl font-bold text-yellow-600">{{ $stats['featured_news'] }}</p>
            </div>
        </div>
    </div>
    
    <!-- Brouillons -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-gray-100 text-gray-600">
                <i class="fas fa-edit text-2xl"></i>
            </div>
            <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-700">Brouillons</h3>
                <p class="text-3xl font-bold text-gray-600">{{ $stats['draft_news'] }}</p>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Actualités Récentes -->
    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold text-gray-700">Actualités Récentes</h3>
                <a href="{{ route('admin.news.index') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                    Voir tout
                </a>
            </div>
        </div>
        <div class="p-6">
            @if($recent_news->count() > 0)
                <div class="space-y-4">
                    @foreach($recent_news as $news)
                        <div class="flex items-center space-x-4">
                            @if($news->image)
                                <img src="{{ $news->image_url }}" alt="{{ $news->title }}" class="w-12 h-12 rounded-lg object-cover">
                            @else
                                <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-image text-gray-400"></i>
                                </div>
                            @endif
                            <div class="flex-1 min-w-0">
                                <h4 class="text-sm font-medium text-gray-900 truncate">{{ $news->title }}</h4>
                                <p class="text-sm text-gray-500">{{ $news->formatted_date }}</p>
                            </div>
                            <div class="flex items-center space-x-2">
                                @if($news->is_published)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Publié
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                        Brouillon
                                    </span>
                                @endif
                                @if($news->is_featured)
                                    <i class="fas fa-star text-yellow-500" title="À la une"></i>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-8">
                    <i class="fas fa-newspaper text-4xl text-gray-300 mb-4"></i>
                    <p class="text-gray-500">Aucune actualité pour le moment</p>
                    <a href="{{ route('admin.news.create') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fas fa-plus mr-2"></i>
                        Créer une actualité
                    </a>
                </div>
            @endif
        </div>
    </div>
    
    <!-- Actions Rapides -->
    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-700">Actions Rapides</h3>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                <a href="{{ route('admin.news.create') }}" class="flex items-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="p-2 bg-blue-600 rounded-lg text-white">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="ml-4">
                        <h4 class="font-medium text-gray-900">Nouvelle Actualité</h4>
                        <p class="text-sm text-gray-600">Créer une nouvelle actualité</p>
                    </div>
                </a>
                
                <a href="{{ route('admin.news.index') }}" class="flex items-center p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-colors">
                    <div class="p-2 bg-green-600 rounded-lg text-white">
                        <i class="fas fa-list"></i>
                    </div>
                    <div class="ml-4">
                        <h4 class="font-medium text-gray-900">Gérer les Actualités</h4>
                        <p class="text-sm text-gray-600">Voir et modifier les actualités</p>
                    </div>
                </a>
                
                <a href="{{ route('news') }}" target="_blank" class="flex items-center p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                    <div class="p-2 bg-purple-600 rounded-lg text-white">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                    <div class="ml-4">
                        <h4 class="font-medium text-gray-900">Voir le Site</h4>
                        <p class="text-sm text-gray-600">Consulter la page actualités</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

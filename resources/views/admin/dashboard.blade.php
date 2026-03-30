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

    <!-- Offres actives -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-indigo-100 text-indigo-600">
                <i class="fas fa-briefcase text-2xl"></i>
            </div>
            <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-700">Offres actives</h3>
                <p class="text-3xl font-bold text-indigo-600">{{ $stats['active_job_offers'] }}</p>
            </div>
        </div>
    </div>

    <!-- Nouvelles candidatures -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-orange-100 text-orange-600">
                <i class="fas fa-file-alt text-2xl"></i>
            </div>
            <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-700">Nouvelles candid.</h3>
                <p class="text-3xl font-bold text-orange-600">{{ $stats['new_applications'] }}</p>
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
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-8">
                    <i class="fas fa-newspaper text-4xl text-gray-300 mb-4"></i>
                    <p class="text-gray-500">Aucune actualité pour le moment</p>
                    <a href="{{ route('admin.news.create') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fas fa-plus mr-2"></i> Créer une actualité
                    </a>
                </div>
            @endif
        </div>
    </div>

    <!-- Candidatures récentes -->
    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold text-gray-700">Dernières Candidatures</h3>
                <a href="{{ route('admin.applications.index') }}" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">
                    Voir tout
                </a>
            </div>
        </div>
        <div class="p-6">
            @if($recent_applications->count() > 0)
                <div class="space-y-4">
                    @foreach($recent_applications as $app)
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-indigo-700 font-bold text-sm">{{ strtoupper(substr($app->first_name, 0, 1) . substr($app->last_name, 0, 1)) }}</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="text-sm font-medium text-gray-900 truncate">{{ $app->full_name }}</h4>
                                <p class="text-xs text-gray-500 truncate">{{ $app->jobOffer->title }}</p>
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
            @else
                <div class="text-center py-8">
                    <i class="fas fa-inbox text-4xl text-gray-300 mb-4"></i>
                    <p class="text-gray-500">Aucune candidature pour le moment</p>
                    <a href="{{ route('admin.job-offers.create') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                        <i class="fas fa-plus mr-2"></i> Créer une offre
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection


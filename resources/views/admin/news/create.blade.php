@extends('admin.layout')

@section('title', 'Créer une Actualité')
@section('header', 'Créer une Actualité')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="mb-6">
        <a href="{{ route('admin.news.index') }}" class="inline-flex items-center text-gray-600 hover:text-gray-900">
            <i class="fas fa-arrow-left mr-2"></i>
            Retour à la liste
        </a>
    </div>
    
    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-6">Informations générales</h3>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Titre -->
                <div class="lg:col-span-2">
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Titre *</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" required 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title') border-red-500 @enderror">
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Catégorie -->
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Catégorie *</label>
                    <select id="category" name="category" required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('category') border-red-500 @enderror">
                        <option value="">Sélectionner une catégorie</option>
                        <option value="general" {{ old('category') == 'general' ? 'selected' : '' }}>Général</option>
                        <option value="services" {{ old('category') == 'services' ? 'selected' : '' }}>Services</option>
                        <option value="partenariats" {{ old('category') == 'partenariats' ? 'selected' : '' }}>Partenariats</option>
                        <option value="innovations" {{ old('category') == 'innovations' ? 'selected' : '' }}>Innovations</option>
                        <option value="evenements" {{ old('category') == 'evenements' ? 'selected' : '' }}>Événements</option>
                    </select>
                    @error('category')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Auteur -->
                <div>
                    <label for="author" class="block text-sm font-medium text-gray-700 mb-2">Auteur *</label>
                    <input type="text" id="author" name="author" value="{{ old('author', 'SABOUGNOUMA') }}" required 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('author') border-red-500 @enderror">
                    @error('author')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Résumé -->
                <div class="lg:col-span-2">
                    <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-2">Résumé *</label>
                    <textarea id="excerpt" name="excerpt" rows="3" required 
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('excerpt') border-red-500 @enderror" 
                              placeholder="Résumé court de l'actualité (max 500 caractères)">{{ old('excerpt') }}</textarea>
                    @error('excerpt')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Image -->
                <div class="lg:col-span-2">
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Image</label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-gray-400 transition-colors">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                    <span>Télécharger une image</span>
                                    <input id="image" name="image" type="file" accept="image/*" class="sr-only" onchange="previewImage(this)">
                                </label>
                                <p class="pl-1">ou glisser-déposer</p>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF jusqu'à 2MB</p>
                        </div>
                    </div>
                    <div id="image-preview" class="mt-4 hidden">
                        <img id="preview-img" src="" alt="Aperçu" class="max-w-xs rounded-lg shadow">
                    </div>
                    @error('image')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Tags -->
                <div class="lg:col-span-2">
                    <label for="tags" class="block text-sm font-medium text-gray-700 mb-2">Tags</label>
                    <input type="text" id="tags" name="tags" value="{{ old('tags') }}" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('tags') border-red-500 @enderror" 
                           placeholder="Séparez les tags par des virgules (ex: innovation, technologie, partenariat)">
                    @error('tags')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        
        <!-- Contenu -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-6">Contenu de l'actualité</h3>
            
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Contenu *</label>
                <textarea id="content" name="content" rows="15" required 
                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('content') border-red-500 @enderror" 
                          placeholder="Rédigez le contenu complet de votre actualité...">{{ old('content') }}</textarea>
                @error('content')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
        
        <!-- Options de publication -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-6">Options de publication</h3>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Date de publication -->
                <div>
                    <label for="published_at" class="block text-sm font-medium text-gray-700 mb-2">Date de publication</label>
                    <input type="datetime-local" id="published_at" name="published_at" 
                           value="{{ old('published_at', now()->format('Y-m-d\TH:i')) }}" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('published_at') border-red-500 @enderror">
                    @error('published_at')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Options -->
                <div class="space-y-4">
                    <div class="flex items-center">
                        <input type="checkbox" id="is_published" name="is_published" value="1" 
                               {{ old('is_published', true) ? 'checked' : '' }}
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="is_published" class="ml-2 block text-sm text-gray-900">
                            Publier immédiatement
                        </label>
                    </div>
                    
                    <div class="flex items-center">
                        <input type="checkbox" id="is_featured" name="is_featured" value="1" 
                               {{ old('is_featured') ? 'checked' : '' }}
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="is_featured" class="ml-2 block text-sm text-gray-900">
                            Mettre à la une
                        </label>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Actions -->
        <div class="flex items-center justify-end space-x-4">
            <a href="{{ route('admin.news.index') }}" class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                Annuler
            </a>
            <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                <i class="fas fa-save mr-2"></i>
                Créer l'actualité
            </button>
        </div>
    </form>
</div>

<script>
function previewImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('preview-img').src = e.target.result;
            document.getElementById('image-preview').classList.remove('hidden');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection

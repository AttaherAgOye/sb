@extends('admin.layout')

@section('title', 'Créer une offre')
@section('header', 'Nouvelle offre d\'emploi')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b">
            <p class="text-gray-600">Remplissez les informations de l'offre d'emploi. Seul le titre est obligatoire.</p>
        </div>
        <form action="{{ route('admin.job-offers.store') }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Titre --}}
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Intitulé du poste <span class="text-red-500">*</span></label>
                    <input type="text" name="title" value="{{ old('title') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('title') border-red-500 @enderror"
                           placeholder="Ex: Responsable Logistique" required>
                    @error('title') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                {{-- Département --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Département <span class="text-gray-400 font-normal">(optionnel)</span></label>
                    <input type="text" name="department" value="{{ old('department') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                           placeholder="Ex: Opérations">
                </div>

                {{-- Lieu --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Lieu <span class="text-gray-400 font-normal">(optionnel)</span></label>
                    <input type="text" name="location" value="{{ old('location', 'Bamako, Mali') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                </div>

                {{-- Type --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Type de contrat <span class="text-gray-400 font-normal">(optionnel)</span></label>
                    <select name="type" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <option value="">-- Non précisé --</option>
                        @foreach(['CDI','CDD','Stage','Freelance'] as $type)
                            <option value="{{ $type }}" {{ old('type') === $type ? 'selected' : '' }}>{{ $type }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Date limite --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Date limite de candidature <span class="text-gray-400 font-normal">(optionnel)</span></label>
                    <input type="date" name="deadline" value="{{ old('deadline') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    @error('deadline') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>
            </div>

            {{-- Description --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Description du poste <span class="text-gray-400 font-normal">(optionnel)</span></label>
                <textarea name="description" rows="6"
                          class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('description') border-red-500 @enderror"
                          placeholder="Décrivez les missions, responsabilités...">{{ old('description') }}</textarea>
                @error('description') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            {{-- Prérequis --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Profil recherché / Prérequis <span class="text-gray-400 font-normal">(optionnel)</span></label>
                <textarea name="requirements" rows="4"
                          class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                          placeholder="Diplômes, expériences, compétences requises...">{{ old('requirements') }}</textarea>
            </div>

            {{-- Documents joints --}}
            <div class="border border-dashed border-indigo-300 rounded-lg p-5 bg-indigo-50/40">
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fas fa-paperclip text-indigo-500 mr-1"></i>
                    Documents joints <span class="text-gray-400 font-normal">(optionnel — PDF, Word, Excel, PowerPoint)</span>
                </label>
                <p class="text-xs text-gray-500 mb-3">Vous pouvez joindre un ou plusieurs documents contenant les détails de l'offre. Max 10 MB par fichier.</p>
                <input type="file" name="documents[]" multiple
                       accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx"
                       class="block w-full text-sm text-gray-500
                              file:mr-4 file:py-2 file:px-4
                              file:rounded-full file:border-0
                              file:text-sm file:font-semibold
                              file:bg-indigo-100 file:text-indigo-700
                              hover:file:bg-indigo-200 cursor-pointer">
                @error('documents.*') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            {{-- Statut actif --}}
            <div class="flex items-center">
                <input type="checkbox" name="is_active" id="is_active" value="1"
                       class="h-4 w-4 text-indigo-600 border-gray-300 rounded"
                       {{ old('is_active', '1') ? 'checked' : '' }}>
                <label for="is_active" class="ml-2 text-sm text-gray-700">Publier cette offre immédiatement</label>
            </div>

            <div class="flex gap-3 pt-4 border-t">
                <button type="submit"
                        class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors font-medium">
                    <i class="fas fa-save mr-2"></i> Créer l'offre
                </button>
                <a href="{{ route('admin.job-offers.index') }}"
                   class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors font-medium">
                    Annuler
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

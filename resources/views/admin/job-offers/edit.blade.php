@extends('admin.layout')

@section('title', 'Modifier l\'offre')
@section('header', 'Modifier l\'offre')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b">
            <p class="text-gray-600">Modifiez les informations de l'offre d'emploi. Seul le titre est obligatoire.</p>
        </div>
        <form action="{{ route('admin.job-offers.update', $jobOffer) }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
            @csrf @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Intitulé du poste <span class="text-red-500">*</span></label>
                    <input type="text" name="title" value="{{ old('title', $jobOffer->title) }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('title') border-red-500 @enderror"
                           required>
                    @error('title') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Département <span class="text-gray-400 font-normal">(optionnel)</span></label>
                    <input type="text" name="department" value="{{ old('department', $jobOffer->department) }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Lieu <span class="text-gray-400 font-normal">(optionnel)</span></label>
                    <input type="text" name="location" value="{{ old('location', $jobOffer->location) }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Type de contrat <span class="text-gray-400 font-normal">(optionnel)</span></label>
                    <select name="type" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <option value="" {{ old('type', $jobOffer->type) === null ? 'selected' : '' }}>-- Non précisé --</option>
                        @foreach(['CDI','CDD','Stage','Freelance'] as $type)
                            <option value="{{ $type }}" {{ old('type', $jobOffer->type) === $type ? 'selected' : '' }}>{{ $type }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Date limite <span class="text-gray-400 font-normal">(optionnel)</span></label>
                    <input type="date" name="deadline" value="{{ old('deadline', $jobOffer->deadline?->format('Y-m-d')) }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    @error('deadline') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Description du poste <span class="text-gray-400 font-normal">(optionnel)</span></label>
                <textarea name="description" rows="6"
                          class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">{{ old('description', $jobOffer->description) }}</textarea>
                @error('description') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Profil recherché / Prérequis <span class="text-gray-400 font-normal">(optionnel)</span></label>
                <textarea name="requirements" rows="4"
                          class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">{{ old('requirements', $jobOffer->requirements) }}</textarea>
            </div>

            {{-- Documents existants --}}
            @if($jobOffer->documents && count($jobOffer->documents) > 0)
            <div class="border border-gray-200 rounded-lg p-5">
                <h4 class="text-sm font-medium text-gray-700 mb-3">
                    <i class="fas fa-paperclip text-indigo-500 mr-1"></i>
                    Documents joints actuels
                </h4>
                <div class="space-y-2">
                    @foreach($jobOffer->documents as $doc)
                    <div class="flex items-center justify-between bg-gray-50 rounded px-3 py-2">
                        <div class="flex items-center gap-2 min-w-0">
                            <i class="fas fa-file text-indigo-400 flex-shrink-0"></i>
                            <span class="text-sm text-gray-700 truncate">{{ $doc['name'] }}</span>
                        </div>
                        <label class="flex items-center gap-1.5 ml-3 flex-shrink-0 cursor-pointer text-red-500 hover:text-red-700 text-xs font-medium">
                            <input type="checkbox" name="remove_documents[]" value="{{ $doc['path'] }}"
                                   class="h-3.5 w-3.5 text-red-500 border-gray-300 rounded">
                            Supprimer
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            {{-- Ajouter de nouveaux documents --}}
            <div class="border border-dashed border-indigo-300 rounded-lg p-5 bg-indigo-50/40">
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fas fa-paperclip text-indigo-500 mr-1"></i>
                    Ajouter des documents <span class="text-gray-400 font-normal">(PDF, Word, Excel, PowerPoint)</span>
                </label>
                <p class="text-xs text-gray-500 mb-3">Les nouveaux fichiers s'ajouteront aux documents existants. Max 10 MB par fichier.</p>
                <input type="file" name="new_documents[]" multiple
                       accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx"
                       class="block w-full text-sm text-gray-500
                              file:mr-4 file:py-2 file:px-4
                              file:rounded-full file:border-0
                              file:text-sm file:font-semibold
                              file:bg-indigo-100 file:text-indigo-700
                              hover:file:bg-indigo-200 cursor-pointer">
                @error('new_documents.*') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="is_active" id="is_active" value="1"
                       class="h-4 w-4 text-indigo-600 border-gray-300 rounded"
                       {{ old('is_active', $jobOffer->is_active) ? 'checked' : '' }}>
                <label for="is_active" class="ml-2 text-sm text-gray-700">Offre active (visible sur le site)</label>
            </div>

            <div class="flex gap-3 pt-4 border-t">
                <button type="submit"
                        class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors font-medium">
                    <i class="fas fa-save mr-2"></i> Enregistrer
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

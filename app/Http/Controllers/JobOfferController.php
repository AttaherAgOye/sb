<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobOffer;
use Illuminate\Support\Facades\Storage;

class JobOfferController extends Controller
{
    public function index()
    {
        $jobOffers = JobOffer::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.job-offers.index', compact('jobOffers'));
    }

    public function create()
    {
        return view('admin.job-offers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'        => 'required|string|max:255',
            'department'   => 'nullable|string|max:255',
            'location'     => 'nullable|string|max:255',
            'type'         => 'nullable|in:CDI,CDD,Stage,Freelance',
            'description'  => 'nullable|string',
            'requirements' => 'nullable|string',
            'deadline'     => 'nullable|date|after:today',
            'is_active'    => 'boolean',
            'documents'    => 'nullable|array',
            'documents.*'  => 'file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:10240',
        ]);

        $validated['is_active'] = $request->has('is_active');

        $documents = [];
        if ($request->hasFile('documents')) {
            foreach ($request->file('documents') as $file) {
                $path = $file->store('job-offer-documents', 'public');
                $documents[] = [
                    'name' => $file->getClientOriginalName(),
                    'path' => $path,
                ];
            }
        }
        $validated['documents'] = $documents ?: null;

        JobOffer::create($validated);

        return redirect()->route('admin.job-offers.index')
                         ->with('success', 'Offre d\'emploi créée avec succès !');
    }

    public function show(JobOffer $jobOffer)
    {
        $applications = $jobOffer->applications()->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.job-offers.show', compact('jobOffer', 'applications'));
    }

    public function edit(JobOffer $jobOffer)
    {
        return view('admin.job-offers.edit', compact('jobOffer'));
    }

    public function update(Request $request, JobOffer $jobOffer)
    {
        $validated = $request->validate([
            'title'        => 'required|string|max:255',
            'department'   => 'nullable|string|max:255',
            'location'     => 'nullable|string|max:255',
            'type'         => 'nullable|in:CDI,CDD,Stage,Freelance',
            'description'  => 'nullable|string',
            'requirements' => 'nullable|string',
            'deadline'     => 'nullable|date',
            'is_active'    => 'boolean',
            'new_documents'       => 'nullable|array',
            'new_documents.*'     => 'file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:10240',
            'remove_documents'    => 'nullable|array',
            'remove_documents.*'  => 'string',
        ]);

        $validated['is_active'] = $request->has('is_active');

        // Handle document removals
        $existingDocuments = $jobOffer->documents ?? [];
        if ($request->has('remove_documents')) {
            $toRemove = $request->input('remove_documents', []);
            foreach ($existingDocuments as $key => $doc) {
                if (in_array($doc['path'], $toRemove)) {
                    Storage::disk('public')->delete($doc['path']);
                    unset($existingDocuments[$key]);
                }
            }
            $existingDocuments = array_values($existingDocuments);
        }

        // Handle new document uploads
        if ($request->hasFile('new_documents')) {
            foreach ($request->file('new_documents') as $file) {
                $path = $file->store('job-offer-documents', 'public');
                $existingDocuments[] = [
                    'name' => $file->getClientOriginalName(),
                    'path' => $path,
                ];
            }
        }

        $validated['documents'] = $existingDocuments ?: null;

        unset($validated['new_documents'], $validated['remove_documents']);
        $jobOffer->update($validated);

        return redirect()->route('admin.job-offers.index')
                         ->with('success', 'Offre d\'emploi mise à jour avec succès !');
    }

    public function destroy(JobOffer $jobOffer)
    {
        // Delete associated documents from storage
        if ($jobOffer->documents) {
            foreach ($jobOffer->documents as $doc) {
                Storage::disk('public')->delete($doc['path']);
            }
        }

        $jobOffer->delete();

        return redirect()->route('admin.job-offers.index')
                         ->with('success', 'Offre d\'emploi supprimée avec succès !');
    }
}

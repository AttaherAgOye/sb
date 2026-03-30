<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobOffer;

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
            'location'     => 'required|string|max:255',
            'type'         => 'required|in:CDI,CDD,Stage,Freelance',
            'description'  => 'required|string',
            'requirements' => 'nullable|string',
            'deadline'     => 'nullable|date|after:today',
            'is_active'    => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');

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
            'location'     => 'required|string|max:255',
            'type'         => 'required|in:CDI,CDD,Stage,Freelance',
            'description'  => 'required|string',
            'requirements' => 'nullable|string',
            'deadline'     => 'nullable|date',
            'is_active'    => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');

        $jobOffer->update($validated);

        return redirect()->route('admin.job-offers.index')
                         ->with('success', 'Offre d\'emploi mise à jour avec succès !');
    }

    public function destroy(JobOffer $jobOffer)
    {
        $jobOffer->delete();

        return redirect()->route('admin.job-offers.index')
                         ->with('success', 'Offre d\'emploi supprimée avec succès !');
    }
}

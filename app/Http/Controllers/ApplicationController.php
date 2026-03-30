<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobOffer;
use App\Models\Application;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{
    // ─── Public: Submit application ────────────────────────────────────────────

    public function store(Request $request, JobOffer $jobOffer)
    {
        $validated = $request->validate([
            'first_name'   => 'required|string|max:255',
            'last_name'    => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'phone'        => 'nullable|string|max:30',
            'message'      => 'nullable|string|max:2000',
            'cv'           => 'required|file|mimes:pdf,doc,docx|max:5120',
            'cover_letter' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ]);

        // Upload CV
        $validated['cv_path'] = $request->file('cv')->store('applications/cv', 'public');

        // Upload cover letter if provided
        if ($request->hasFile('cover_letter')) {
            $validated['cover_letter_path'] = $request->file('cover_letter')->store('applications/lettres', 'public');
        }

        $validated['job_offer_id'] = $jobOffer->id;

        Application::create($validated);

        return redirect()->route('careers.show', $jobOffer)
                         ->with('success', 'Votre candidature a bien été envoyée ! Nous vous contacterons prochainement.');
    }

    // ─── Admin: List all applications ──────────────────────────────────────────

    public function index(Request $request)
    {
        $query = Application::with('jobOffer')->orderBy('created_at', 'desc');

        if ($request->filled('offer')) {
            $query->where('job_offer_id', $request->offer);
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $applications = $query->paginate(15)->withQueryString();
        $jobOffers    = JobOffer::orderBy('title')->get();

        return view('admin.applications.index', compact('applications', 'jobOffers'));
    }

    // ─── Admin: Show one application ───────────────────────────────────────────

    public function show(Application $application)
    {
        $application->load('jobOffer');
        return view('admin.applications.show', compact('application'));
    }

    // ─── Admin: Update status ──────────────────────────────────────────────────

    public function updateStatus(Request $request, Application $application)
    {
        $request->validate([
            'status' => 'required|in:nouveau,en_cours,accepte,refuse',
        ]);

        $application->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Statut mis à jour avec succès !');
    }
}

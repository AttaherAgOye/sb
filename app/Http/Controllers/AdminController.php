<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'total_news' => News::count(),
            'published_news' => News::published()->count(),
            'featured_news' => News::featured()->count(),
            'draft_news' => News::where('is_published', false)->count(),
        ];
        
        $recent_news = News::orderBy('created_at', 'desc')->limit(5)->get();
        
        return view('admin.dashboard', compact('stats', 'recent_news'));
    }

    public function newsIndex()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    public function newsCreate()
    {
        return view('admin.news.create');
    }

    public function newsStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|string',
            'is_featured' => 'boolean',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
            'author' => 'required|string|max:255',
            'tags' => 'nullable|string'
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('news', 'public');
        }

        // Process tags
        if ($request->tags) {
            $validated['tags'] = array_map('trim', explode(',', $request->tags));
        }

        // Generate slug
        $validated['slug'] = Str::slug($validated['title']);
        
        // Ensure unique slug
        $originalSlug = $validated['slug'];
        $counter = 1;
        while (News::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] = $originalSlug . '-' . $counter;
            $counter++;
        }

        News::create($validated);

        return redirect()->route('admin.news.index')
                        ->with('success', 'Actualité créée avec succès!');
    }

    public function newsShow(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    public function newsEdit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function newsUpdate(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|string',
            'is_featured' => 'boolean',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
            'author' => 'required|string|max:255',
            'tags' => 'nullable|string'
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $validated['image'] = $request->file('image')->store('news', 'public');
        }

        // Process tags
        if ($request->tags) {
            $validated['tags'] = array_map('trim', explode(',', $request->tags));
        }

        // Update slug if title changed
        if ($validated['title'] !== $news->title) {
            $validated['slug'] = Str::slug($validated['title']);
            
            // Ensure unique slug
            $originalSlug = $validated['slug'];
            $counter = 1;
            while (News::where('slug', $validated['slug'])->where('id', '!=', $news->id)->exists()) {
                $validated['slug'] = $originalSlug . '-' . $counter;
                $counter++;
            }
        }

        $news->update($validated);

        return redirect()->route('admin.news.index')
                        ->with('success', 'Actualité mise à jour avec succès!');
    }

    public function newsDestroy(News $news)
    {
        // Delete image
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();

        return redirect()->route('admin.news.index')
                        ->with('success', 'Actualité supprimée avec succès!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $query = News::published()->orderBy('published_at', 'desc');
        
        // Filter by category if provided
        if ($request->has('category') && $request->category) {
            $query->byCategory($request->category);
        }
        
        // Search functionality
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }
        
        $news = $query->paginate(9);
        $featured_news = News::published()->featured()->recent(3)->get();
        $categories = News::published()->distinct()->pluck('category');
        
        return view('news', compact('news', 'featured_news', 'categories'));
    }

    public function show(News $news)
    {
        // Check if news is published
        if (!$news->is_published || $news->published_at > now()) {
            abort(404);
        }
        
        // Increment views
        $news->incrementViews();
        
        // Get related news (same category, excluding current)
        $related_news = News::published()
                           ->byCategory($news->category)
                           ->where('id', '!=', $news->id)
                           ->recent(3)
                           ->get();
        
        // Get recent news if not enough related
        if ($related_news->count() < 3) {
            $additional_news = News::published()
                                  ->where('id', '!=', $news->id)
                                  ->whereNotIn('id', $related_news->pluck('id'))
                                  ->recent(3 - $related_news->count())
                                  ->get();
            $related_news = $related_news->merge($additional_news);
        }
        
        return view('news.show', compact('news', 'related_news'));
    }

    public function category($category)
    {
        $news = News::published()
                   ->byCategory($category)
                   ->orderBy('published_at', 'desc')
                   ->paginate(9);
        
        $categories = News::published()->distinct()->pluck('category');
        
        return view('news.category', compact('news', 'category', 'categories'));
    }
}

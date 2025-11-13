<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Carbon\Carbon;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'image',
        'category',
        'is_featured',
        'is_published',
        'published_at',
        'author',
        'tags',
        'views_count'
    ];

    protected $casts = [
        'tags' => 'array',
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
        'views_count' => 'integer'
    ];

    protected $dates = [
        'published_at',
        'created_at',
        'updated_at'
    ];

    // Automatically generate slug from title
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($news) {
            if (empty($news->slug)) {
                $news->slug = Str::slug($news->title);
            }
            
            if (empty($news->published_at)) {
                $news->published_at = now();
            }
        });
        
        static::updating(function ($news) {
            if ($news->isDirty('title') && empty($news->getOriginal('slug'))) {
                $news->slug = Str::slug($news->title);
            }
        });
    }

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
                    ->where('published_at', '<=', now());
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function scopeRecent($query, $limit = 5)
    {
        return $query->orderBy('published_at', 'desc')->limit($limit);
    }

    // Accessors
    public function getFormattedDateAttribute()
    {
        return $this->published_at ? $this->published_at->format('d M Y') : '';
    }

    public function getReadTimeAttribute()
    {
        $words = str_word_count(strip_tags($this->content));
        $minutes = ceil($words / 200); // Average reading speed
        return $minutes . ' min de lecture';
    }

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }
        return asset('images/default-news.jpg');
    }

    // Methods
    public function incrementViews()
    {
        $this->increment('views_count');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobOffer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'department',
        'location',
        'type',
        'description',
        'requirements',
        'deadline',
        'is_active',
        'documents',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'deadline'  => 'date',
        'documents' => 'array',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function getTypeLabelAttribute(): string
    {
        return match ($this->type) {
            'CDI'       => 'CDI',
            'CDD'       => 'CDD',
            'Stage'     => 'Stage',
            'Freelance' => 'Freelance',
            default     => $this->type ?? '',
        };
    }

    public function getTypeBadgeClassAttribute(): string
    {
        return match ($this->type) {
            'CDI'       => 'bg-green-100 text-green-800',
            'CDD'       => 'bg-blue-100 text-blue-800',
            'Stage'     => 'bg-yellow-100 text-yellow-800',
            'Freelance' => 'bg-purple-100 text-purple-800',
            default     => 'bg-gray-100 text-gray-800',
        };
    }

    public function getIsExpiredAttribute(): bool
    {
        return $this->deadline && $this->deadline->isPast();
    }
}

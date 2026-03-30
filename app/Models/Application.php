<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_offer_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'cv_path',
        'cover_letter_path',
        'message',
        'status',
    ];

    // Relations
    public function jobOffer()
    {
        return $this->belongsTo(JobOffer::class);
    }

    // Accessors
    public function getFullNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getStatusLabelAttribute(): string
    {
        return match ($this->status) {
            'nouveau'   => 'Nouveau',
            'en_cours'  => 'En cours',
            'accepte'   => 'Accepté',
            'refuse'    => 'Refusé',
            default     => ucfirst($this->status),
        };
    }

    public function getStatusBadgeClassAttribute(): string
    {
        return match ($this->status) {
            'nouveau'   => 'bg-blue-100 text-blue-800',
            'en_cours'  => 'bg-yellow-100 text-yellow-800',
            'accepte'   => 'bg-green-100 text-green-800',
            'refuse'    => 'bg-red-100 text-red-800',
            default     => 'bg-gray-100 text-gray-800',
        };
    }

    public function getCvUrlAttribute(): string
    {
        return asset('storage/' . $this->cv_path);
    }

    public function getCoverLetterUrlAttribute(): ?string
    {
        return $this->cover_letter_path ? asset('storage/' . $this->cover_letter_path) : null;
    }
}

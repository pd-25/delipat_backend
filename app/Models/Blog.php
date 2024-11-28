<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'image',
        'tags',
        'meta_title',
        'meta_description',
        'headerscript',
        'type',
    ];

    protected $casts = [
        'tags' => 'array', // Ensure the `tags` field is handled as an array
    ];

    /**
     * Relationship with BlogFaq.
     * A Blog has many FAQs.
     */
    public function faqs()
    {
        return $this->hasMany(BlogFaq::class);
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogFaq extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_id',
        'question',
        'answer',
    ];

    // Explicitly define the table name
    protected $table = 'blogfaqs';

    /**
     * Relationship with Blog.
     */
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}

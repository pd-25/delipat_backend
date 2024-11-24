<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo1',
        'logo2',
        'phone',
        'email',
        'facebooklink',
        'twitterlink',
        'instagramlink',
        'youtubelink',
        'linkdinlink',
        'title',
        'description',
        'header_script',
        'footer_script',
        'body_script',
    ];
}

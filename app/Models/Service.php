<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'meta_title',
        'meta_description',
        'headerscript',
        'feature_image',
        'feature_heading',
        'short_description',
        'sec1_heading',
        'sec1_description',
        'sec1_image',
        'sec2_heading',
        'sec2_service1_heading',
        'sec2_service1_description',
        'sec2_service1_icon',
        'sec2_service2_heading',
        'sec2_service2_description',
        'sec2_service2_icon',
        'sec2_service3_heading',
        'sec2_service3_description',
        'sec2_service3_icon',
        'sec2_service4_heading',    
        'sec2_service4_description',
        'sec2_service4_icon',
        'sec2_service5_heading',
        'sec2_service5_description',
        'sec2_service5_icon',
        'sec2_service6_heading',
        'sec2_service6_description',
        'sec2_service6_icon',
        'sec3_heading',
        'sec3_service1_heading',
        'sec3_service1_description',
        'sec3_service1_icon',
        'sec3_service2_heading',
        'sec3_service2_description',
        'sec3_service2_icon',
        'sec3_service3_heading',
        'sec3_service3_description',
        'sec3_service3_icon',
        'sec3_service4_heading',
        'sec3_service4_description',
        'sec3_service4_icon',
    ];

    public function faqs()
    {
        return $this->hasMany(ServiceFaq::class);
    }
}

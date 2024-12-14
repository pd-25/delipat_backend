<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceFaq extends Model
{
    use HasFactory;
    protected $table = 'service_faq';

    protected $fillable = [
        'service_id',
        'question',
        'answer',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}

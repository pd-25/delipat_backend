<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerLogo extends Model
{
    use HasFactory;

    protected $table = 'partner_logos';

    protected $fillable = ['image', 'alt'];
}

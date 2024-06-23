<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model
{
    use HasFactory;

    protected $fillable = [

        'site_title',
        'site_tagline',
        'site_icon',
        'site_colour',
        'user_id'
    ];
}

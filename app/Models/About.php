<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'titledescription',
        'whotitle',
        'whodescription',
        'visiontitle',
        'visiondescription',
        'historytitle',
        'historydescription',
        'aboutimage'
    ];

    protected static function booted()
    {
        static::creating(function ($about) {
            $about->user_id = Auth::user()->id;
        });
    }
}

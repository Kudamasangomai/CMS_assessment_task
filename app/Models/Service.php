<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable= [
        'title',
        'description',
        'user_id',
        
    ];

    protected static function booted()
    {
        static::creating(function ($service) {
            $service->user_id = Auth::user()->id;
        });
    }
}

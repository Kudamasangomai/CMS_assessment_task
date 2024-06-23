<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'description',
        'button_text_one',
        'button_text_two',
        'image',
        'user_id',

    ];

    protected static function booted()
    {
        static::creating(function ($hero) {
            $hero->user_id = Auth::user()->id;
        });
    }
}

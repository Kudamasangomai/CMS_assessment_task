<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Footer extends Model
{
    use HasFactory;
    protected $fillable =[
    
        'title',
       'description',
       'button_text',
       'user_id',
    ];



}

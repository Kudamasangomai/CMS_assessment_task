<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\SiteSettings;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
    public function index()
    {
   
        $site = SiteSettings::where('status', 'Active')->first();
        $footer = Footer::where('published','Yes')->first();
        return view('welcome',compact('site','footer'));
    }
}

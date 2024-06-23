<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Footer;
use App\Models\Service;
use App\Models\SiteSettings;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
    public function index()
    {

        $icon =  'lni lni-shield';
   
        $site = SiteSettings::where('status', 'Active')->first();
        $footer = Footer::where('published','Yes')->first();
        $hero = Hero::first();
        $service = Service::all();
        return view('welcome',compact('site','footer','hero','service','icon'));
    }
}

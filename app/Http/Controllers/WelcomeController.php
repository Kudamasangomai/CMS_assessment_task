<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Hero;
use App\Models\Footer;
use App\Models\Price;
use App\Models\Service;
use App\Models\SiteSettings;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function index()
    {
        $site = SiteSettings::where('status', 'Active')->first();
        $footer = Footer::where('published', 'Yes')->first();
        $hero = Hero::first();
        $service = Service::all();
        $about = About::first();
        $prices = Price::all();
        return view('welcome', compact('site', 'footer', 'hero', 'service', 'about', 'prices'));


    }
}

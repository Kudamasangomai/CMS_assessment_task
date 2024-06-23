<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Http\Requests\StoreHeroRequest;
use Illuminate\Support\Facades\Artisan;
use App\Http\Requests\UpdateHeroRequest;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero = Hero::first();
        return view('admin.Hero.Hero',compact('hero'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHeroRequest $request)
    {

        $herodata = $request ->validated();
        $data = Hero::first();    
        $path = $request->hasFile('image')  ? $request->file('image')->store('uploads', 'public') : $data->image;

        $hero= Hero::updateOrCreate([
            
            'id'   => $data->id
        ],[
            'title'     => $request->title,
            'description' => $request->description,
            'button_text_one'    => $request->button_text_one,
            'button_text_two'   => $request->button_text_two,
            'image'       => $path,
        
        ]);
        return redirect()->back()->with(['success' => 'Hero Section Saved Successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeroRequest $request, Hero $hero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        //
    }
}

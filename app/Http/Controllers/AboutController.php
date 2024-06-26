<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::first();
        return view('admin.About.about', compact('about'));
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
    public function store(StoreAboutRequest $request)
    {

        $data = $request->validated(); 
        $aboutdata = About::first();    
        $path = $request->hasFile('aboutimage') ? $request->file('aboutimage')->store('uploads', 'public') : 'a';

        $hero= About::updateOrCreate([
            
            'id' => isset($aboutdata->id) ? $aboutdata->id : null
        ],[
            'title' => $request->title,
            'titledescription'=> $request->titledescription,
            'whotitle' => $request->whotitle,
            'whodescription' => $request->whodescription,
            'visiontitle' => $request->visiontitle,
            'visiondescription' => $request->visiondescription,
            'historytitle' => $request->historytitle,
            'historydescription' => $request->historydescription,
            'aboutimage' =>  $path,
          'user_id' => Auth::user()->id
        
        ]);
        return redirect()->back()->with(['success' => 'About Section Saved Successfully']);
   
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutRequest $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}

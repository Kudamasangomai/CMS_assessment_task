<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.Servicess.services',compact('services'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        try {

            if (Service::count() >= 6) {
                return back()->with(['error' => 'You are Limited To 6 records only.']);
              }
            $data = $request->validated();
            Service::create($data);
            return redirect()->back()->with(['success' => 'Data created successfully!']);
          } catch (\Exception $e) {

            return redirect()->back()->with(['error' => 'There was an error creating the data. Please try again.']);
          }
    }
 

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service = Service::findorFail($id);
        return view('admin.Servicess.editservice',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        
        $request->validated();

        $service->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('services.index')->with('success', 'Service Successfully  Updated');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back()->with(['success' => 'Service Successfully deleted']);
         
    }
}

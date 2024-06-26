<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Http\Requests\StoreFooterRequest;
use App\Http\Requests\UpdateFooterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footer = Footer::all();
        return view('admin.footer.footer', compact('footer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFooterRequest $request)
    {
        try {

            if (Footer::count() >= 2) {
                return back()->with(['error' => 'You can only create a maximum of 3 Record records']);
            }
            $footerdata = $request->validated();
            $footerdata['user_id'] = Auth::user()->id;
            Footer::create($footerdata);
            return redirect()->back()->with(['Success' => 'Footer Created Succesfully']);
        } catch (\Exception $e) {

            return redirect()->back()->with(['error' => 'There was an error creating the data. Please try again.']);
        }
    }


    public function publish(Request $request, $id)
    {


        $footer = Footer::where('id', $id)->update([
            'published' => $request->input('status') === 'on' ? 'Yes' : 'No',
        ]);
        if ($footer) {
            Footer::where('id', '!=', $id)->update([
                'published' => 'No',
            ]);
        }
        return redirect()->back()->with(['success' => 'Footer Published Succesfully']);
    }


    /**
     * Display the specified resource.
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Footer $footer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFooterRequest $request, Footer $footer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Footer $footer)
    {
        //
    }
}

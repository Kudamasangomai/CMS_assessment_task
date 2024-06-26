<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Http\Requests\StorePriceRequest;
use App\Http\Requests\UpdatePriceRequest;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prices = Price::all();
        return view('admin.Price.price', compact('prices'));
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
    public function store(StorePriceRequest $request)
    {

   
        try {

            if (Price::count() >= 3) {
                return back()->with(['error' => 'You are Limited To 3 packages records only.']);
            }
            $formdata = $request->validated();
            Price::create($formdata);
            return redirect()->back()->with(['success' => 'Subscription Plan created successfully!']);
        } catch (\Exception $e) {

            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $subscription = Price::find($id);
        return view('admin.Price.priceedit',compact('subscription'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePriceRequest $request, Price $price)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Price $price)
    {
        //
    }
}

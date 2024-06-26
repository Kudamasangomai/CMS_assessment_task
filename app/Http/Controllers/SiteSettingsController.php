<?php

namespace App\Http\Controllers;

use App\Models\SiteSettings;
use App\Http\Requests\StoreSiteSettingsRequest;
use App\Http\Requests\UpdateSiteSettingsRequest;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

class SiteSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $site = SiteSettings::all();
        return view('admin.sitesettings.settingslist', compact('site'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sitesettings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSiteSettingsRequest $request)
    {




        try {

            if (SiteSettings::count() >= 3) {
                return back()->with(['error' => 'You can only create a maximum of 3 Record records']);
            }
            $sitedata = $request->validated();
            $sitedata['user_id'] = Auth::user()->id;
            $newsitesetting =  SiteSettings::create($sitedata);
            return redirect()->route('site_settings.show', $newsitesetting->id)->with('success', 'Site Seeting Created');
        } catch (\Exception $e) {

            return redirect()->back()->with(['error' => 'There was an error creating the data. Please try again.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $site = SiteSettings::find($id);
        return view('admin.sitesettings.show', compact('site'));
    }

    public function publish($id)
    {

        SiteSettings::where('id', $id)
            ->update(['status' => 'Active']);

        SiteSettings::where('id', '!=', $id)
            ->update(['status' => 'Not-Active']);

        return redirect()->route('site_settings.show', $id)->with('success', 'Site Settings Published');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $site = SiteSettings::find($id);
        return view('admin.sitesettings.edit', compact('site'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiteSettingsRequest $request, $id)
    {

        $site = SiteSettings::find($id);
        $request->validated();

        $site->update([
            "site_title" => $request->site_title,
            "site_tagline" =>  $request->site_tagline,
            "site_colour" =>  $request->site_colour,
        ]);

        return redirect()->route('site_settings.show', $site->id)->with('success', 'Site Settings Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $record = SiteSettings::where('id', $id)->first();

    if (!$record) {
        return redirect()->back()->with('error', 'Record not found.');
    }

    if ($record->Status !== 'Active') {
        $record->delete();
        return redirect()->route('site_settings.index')->with('success', 'Site setting deleted successfully!');
    }

    return redirect()->back()->with('error', 'Can not delete An Active Setting.');
}
}

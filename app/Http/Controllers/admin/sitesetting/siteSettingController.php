<?php

namespace App\Http\Controllers\admin\sitesetting;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class siteSettingController extends Controller
{
    public function index()
    {
        $siteSetting = SiteSetting::find(1); // Find the SiteSetting with ID 1
    
        if (!$siteSetting) {
            // If no SiteSetting exists with ID 1, show the create view
            return view('admin.site_settings.create');
        }
    
        // If the SiteSetting exists, show the edit view
        return view('admin.site_settings.index', compact('siteSetting'));
    }
    

    public function create()
    {
        return view('site-settings.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'logo1' => 'nullable|image',
            'logo2' => 'nullable|image',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
            'facebooklink' => 'nullable|url',
            'twitterlink' => 'nullable|url',
            'instagramlink' => 'nullable|url',
            'youtubelink' => 'nullable|url',
            'linkdinlink' => 'nullable|url',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'header_script' => 'nullable|string',
            'footer_script' => 'nullable|string',
            'body_script' => 'nullable|string',
        ]);
    
        // Handle file uploads
        if ($request->hasFile('logo1')) {
            $validated['logo1'] = $request->file('logo1')->store('site-settings', 'public');
        }
    
        if ($request->hasFile('logo2')) {
            $validated['logo2'] = $request->file('logo2')->store('site-settings', 'public');
        }
    
        // Create the record
        SiteSetting::create($validated);
    
        return redirect()->route('site-settings.index')->with('success', 'Site setting created successfully.');
    }
    
    
    

    public function show(SiteSetting $siteSetting)
    {
        return view('site-settings.show', compact('siteSetting'));
    }

    public function edit(SiteSetting $siteSetting)
    {
        return view('site-settings.edit', compact('siteSetting'));
    }

    public function update(Request $request, SiteSetting $siteSetting)
    {
        $validated = $request->validate([
            'logo1' => 'nullable|image', // Validate as image
            'logo2' => 'nullable|image', // Validate as image
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
            'facebooklink' => 'nullable|url',
            'twitterlink' => 'nullable|url',
            'instagramlink' => 'nullable|url',
            'youtubelink' => 'nullable|url',
            'linkdinlink' => 'nullable|url',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'header_script' => 'nullable|string',
            'footer_script' => 'nullable|string',
            'body_script' => 'nullable|string',
        ]);
    
        // Handle logo1 file upload and replace old file
        if ($request->hasFile('logo1')) {
            // Delete old file if it exists
            if ($siteSetting->logo1 && \Storage::disk('public')->exists($siteSetting->logo1)) {
                \Storage::disk('public')->delete($siteSetting->logo1);
            }
    
            // Upload the new file to 'site-settings' directory
            $validated['logo1'] = $request->file('logo1')->store('site-settings', 'public');
        }
    
        // Handle logo2 file upload and replace old file
        if ($request->hasFile('logo2')) {
            // Delete old file if it exists
            if ($siteSetting->logo2 && \Storage::disk('public')->exists($siteSetting->logo2)) {
                \Storage::disk('public')->delete($siteSetting->logo2);
            }
    
            // Upload the new file to 'site-settings' directory
            $validated['logo2'] = $request->file('logo2')->store('site-settings', 'public');
        }
    
        // Update the site setting record
        $siteSetting->update($validated);
    
        return redirect()->route('site-settings.index')->with('success', 'Site setting updated successfully.');
    }
    

    public function destroy(SiteSetting $siteSetting)
    {
        $siteSetting->delete();
        return redirect()->route('site-settings.index')->with('success', 'Site setting deleted successfully.');
    }
}

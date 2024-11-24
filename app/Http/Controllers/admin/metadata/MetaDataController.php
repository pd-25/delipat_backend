<?php

namespace App\Http\Controllers\admin\metadata;

use App\Http\Controllers\Controller;
use App\Models\MetaData;
use Illuminate\Http\Request;

class MetaDataController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $metaData = MetaData::all();
        return view('admin.meta_data.index', compact('metaData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.meta_data.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'page_name' => 'required|string|max:255',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'headerscript' => 'nullable|string',
        ]);

        MetaData::create($request->all());

        return redirect()->route('seo-settings.index')->with('success', 'Meta Data created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(MetaData $metaData)
    {
        return view('admin.meta_data.show', compact('metaData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MetaData $seo_setting)
    {
        return view('admin.meta_data.edit', ['metaData' => $seo_setting]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MetaData $seo_setting)
    {
        $request->validate([
            'page_name' => 'required|string|max:255',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'headerscript' => 'nullable|string',
        ]);

        $seo_setting->update($request->all());

        return redirect()->route('seo-settings.index')->with('success', 'Meta Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MetaData $seo_setting)
    {
        $seo_setting->delete();

        return redirect()->route('seo-settings.index')->with('success', 'Meta Data deleted successfully.');
    }
}

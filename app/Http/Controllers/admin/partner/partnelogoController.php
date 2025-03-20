<?php

namespace App\Http\Controllers\admin\partner;

use App\Http\Controllers\Controller;
use App\Models\PartnerLogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class partnelogoController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partnerLogos = PartnerLogo::all();
        return view('admin.partner.index', compact('partnerLogos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alt' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('partnerlogos', 'public');
        }

        PartnerLogo::create([
            'image' => $imagePath ?? null,
            'alt' => $request->alt,
        ]);

        return redirect()->route('partner.index')->with('success', 'Partner Logo Uploaded Successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $partnerLogo = PartnerLogo::find($id);
        return view('admin.partner.edit', compact('partnerLogo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PartnerLogo $partner)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alt' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            Storage::disk('public')->delete($partner->image);

            // Upload new image
            $imagePath = $request->file('image')->store('partnerlogos', 'public');
            $partner->image = $imagePath;
        }

        $partner->alt = $request->alt;
        $partner->save();

        return redirect()->route('partner.index')->with('success', 'Partner Logo Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PartnerLogo $partner)
    {
        // Delete image from storage
        Storage::disk('public')->delete($partner->image);

        // Delete record from database
        $partner->delete();

        return redirect()->route('partner.index')->with('success', 'Partner Logo Deleted Successfully!');
    }
}

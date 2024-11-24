<?php

namespace App\Http\Controllers\admin\gallery;

use App\Http\Controllers\Controller;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryImageController extends Controller
{
    
    // Display a listing of the gallery images
    public function index()
    {
        $galleryImages = GalleryImage::all();  // Get all gallery images
        return view('admin.gallery.index', compact('galleryImages'));
    }

    // Show the form for creating a new gallery image
    public function create()
    {
        return view('admin.gallery.create');
    }

    // Store a newly created gallery image in the database
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Validate image type and size
        ]);

        // Store the image
        $imagePath = $request->file('image')->store('gallery_images', 'public');

        // Create a new gallery image record
        GalleryImage::create([
            'image_path' => $imagePath,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Image uploaded successfully!');
    }

    // Display the specified gallery image
    public function show($id)
    {
        $galleryImage = GalleryImage::findOrFail($id);  // Find the image by ID
        return view('admin.gallery.show', compact('galleryImage'));
    }

    // Show the form for editing the specified gallery image
    public function edit($id)
    {
        $galleryImage = GalleryImage::findOrFail($id);  // Find the image by ID
        return view('admin.gallery.edit', compact('galleryImage'));
    }

    // Update the specified gallery image in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Validate image type and size
        ]);
    
        $galleryImage = GalleryImage::findOrFail($id);
    
        // If a new image is uploaded, remove the old image and store the new one
        if ($request->hasFile('image')) {
            // Delete the old image from storage if it exists
            if ($galleryImage->image_path && file_exists(storage_path('app/public/' . $galleryImage->image_path))) {
                unlink(storage_path('app/public/' . $galleryImage->image_path));  // Remove old image file
            }
    
            // Store the new image
            $imagePath = $request->file('image')->store('gallery_images', 'public');
    
            // Update the gallery image record with the new image path
            $galleryImage->update([
                'image_path' => $imagePath,
            ]);
        }
    
        return redirect()->route('gallery.index')->with('success', 'Image updated successfully!');
    }
    

    // Remove the specified gallery image from the database
    public function destroy($id)
    {
        $galleryImage = GalleryImage::findOrFail($id);

        // Delete the image file from storage
        if (storage_path('app/public/' . $galleryImage->image_path)) {
            unlink(storage_path('app/public/' . $galleryImage->image_path));  // Remove file from storage
        }

        // Delete the record from the database
        $galleryImage->delete();

        return redirect()->route('gallery.index')->with('success', 'Image deleted successfully!');
    }
}

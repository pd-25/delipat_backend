<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ServiceFaq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::with('faqs')->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   
    public function store(Request $request)
    {
        // Validation Rules
        $validator = Validator::make($request->all(), [
            'slug' => 'required|unique:services,slug',
            'meta_title' => 'required|string',
            'meta_description' => 'required|string',
            'headerscript' => 'nullable|string',
            'short_description' => 'nullable|string',
            'sec1_heading' => 'nullable|string',
            'sec1_description' => 'nullable|string',
            'sec1_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sec2_heading' => 'nullable|string',
            'sec2_service1_heading' => 'nullable|string',
            'sec2_service1_description' => 'nullable|string',
            'sec2_service1_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sec2_service2_heading' => 'nullable|string',
            'sec2_service2_description' => 'nullable|string',
            'sec2_service2_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sec2_service3_heading' => 'nullable|string',
            'sec2_service3_description' => 'nullable|string',
            'sec2_service3_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sec2_service4_heading' => 'nullable|string',
            'sec2_service4_description' => 'nullable|string',
            'sec2_service4_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sec2_service5_heading' => 'nullable|string',
            'sec2_service5_description' => 'nullable|string',
            'sec2_service5_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sec2_service6_heading' => 'nullable|string',
            'sec2_service6_description' => 'nullable|string',
            'sec2_service6_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sec3_heading' => 'nullable|string',
            'sec3_service1_heading' => 'nullable|string',
            'sec3_service1_description' => 'nullable|string',
            'sec3_service1_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sec3_service2_heading' => 'nullable|string',
            'sec3_service2_description' => 'nullable|string',
            'sec3_service2_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sec3_service3_heading' => 'nullable|string',
            'sec3_service3_description' => 'nullable|string',
            'sec3_service3_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sec3_service4_heading' => 'nullable|string',
            'sec3_service4_description' => 'nullable|string',
            'sec3_service4_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'faqs' => 'nullable|array',
            'faqs.*.question' => 'required_with:faqs|string',
            'faqs.*.answer' => 'required_with:faqs|string',
        ]);
    
        // Handle Validation Errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Extract Data
        $data = $request->except(
            'faqs', 
            'sec1_image', 
            'sec2_service1_icon', 'sec2_service2_icon', 'sec2_service3_icon', 
            'sec2_service4_icon', 'sec2_service5_icon', 'sec2_service6_icon', 
            'sec3_service1_icon', 'sec3_service2_icon', 'sec3_service3_icon', 
            'sec3_service4_icon'
        );
    
        // Handle Section 1 Image Upload
        if ($request->hasFile('sec1_image')) {
            $data['sec1_image'] = $request->file('sec1_image')->store('service_images', 'public');
        }
    
        // Handle Icons Upload
        $icons = [
            'sec2_service1_icon', 'sec2_service2_icon', 'sec2_service3_icon', 
            'sec2_service4_icon', 'sec2_service5_icon', 'sec2_service6_icon', 
            'sec3_service1_icon', 'sec3_service2_icon', 'sec3_service3_icon', 
            'sec3_service4_icon'
        ];
    
        foreach ($icons as $icon) {
            if ($request->hasFile($icon)) {
                $data[$icon] = $request->file($icon)->store('service_icons', 'public');
            }
        }
    
        // Save Service Data
        $service = Service::create($data);
    
        // Save FAQs if provided
        if ($request->has('faqs')) {
            foreach ($request->faqs as $faq) {
                $service->faqs()->create($faq);
            }
        }
    
        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        $service->load('faqs');
        return view('services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        $service->load('faqs');
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        // Validate incoming request data
        $request->validate([
            'slug' => 'required|unique:services,slug,' . $service->id,
            'meta_title' => 'required|string',
            'meta_description' => 'required|string',
            'headerscript' => 'nullable|string',
            'short_description' => 'nullable|string',
            'sec1_heading' => 'nullable|string',
            'sec1_description' => 'nullable|string',
            'sec1_image' => 'nullable|image|max:2048',
    
            // Section 2 validations
            'sec2_heading' => 'nullable|string',
            'sec2_service1_heading' => 'nullable|string',
            'sec2_service1_description' => 'nullable|string',
            'sec2_service1_icon' => 'nullable|image|max:2048',
            'sec2_service2_heading' => 'nullable|string',
            'sec2_service2_description' => 'nullable|string',
            'sec2_service2_icon' => 'nullable|image|max:2048',
            'sec2_service3_heading' => 'nullable|string',
            'sec2_service3_description' => 'nullable|string',
            'sec2_service3_icon' => 'nullable|image|max:2048',
            'sec2_service4_heading' => 'nullable|string',
            'sec2_service4_description' => 'nullable|string',
            'sec2_service4_icon' => 'nullable|image|max:2048',
            'sec2_service5_heading' => 'nullable|string',
            'sec2_service5_description' => 'nullable|string',
            'sec2_service5_icon' => 'nullable|image|max:2048',
            'sec2_service6_heading' => 'nullable|string',
            'sec2_service6_description' => 'nullable|string',
            'sec2_service6_icon' => 'nullable|image|max:2048',
    
            // Section 3 validations
            'sec3_heading' => 'nullable|string',
            'sec3_service1_heading' => 'nullable|string',
            'sec3_service1_description' => 'nullable|string',
            'sec3_service1_icon' => 'nullable|image|max:2048',
            'sec3_service2_heading' => 'nullable|string',
            'sec3_service2_description' => 'nullable|string',
            'sec3_service2_icon' => 'nullable|image|max:2048',
            'sec3_service3_heading' => 'nullable|string',
            'sec3_service3_description' => 'nullable|string',
            'sec3_service3_icon' => 'nullable|image|max:2048',
            'sec3_service4_heading' => 'nullable|string',
            'sec3_service4_description' => 'nullable|string',
            'sec3_service4_icon' => 'nullable|image|max:2048',
    
            // FAQs validation
            'faqs' => 'nullable|array',
            'faqs.*.question' => 'required_with:faqs|string',
            'faqs.*.answer' => 'required_with:faqs|string',
        ]);
    
        // Update the service fields excluding images and FAQs
        $data = $request->except([
            'sec1_image',
            'sec2_service1_icon', 'sec2_service2_icon', 'sec2_service3_icon', 'sec2_service4_icon', 
            'sec2_service5_icon', 'sec2_service6_icon',
            'sec3_service1_icon', 'sec3_service2_icon', 'sec3_service3_icon', 'sec3_service4_icon',
            'faqs',
        ]);
    
        // Handle image uploads
        $fieldsWithImages = [
            'sec1_image',
            'sec2_service1_icon', 'sec2_service2_icon', 'sec2_service3_icon', 'sec2_service4_icon',
            'sec2_service5_icon', 'sec2_service6_icon',
            'sec3_service1_icon', 'sec3_service2_icon', 'sec3_service3_icon', 'sec3_service4_icon',
        ];
    
        foreach ($fieldsWithImages as $field) {
            if ($request->hasFile($field)) {
                // Delete the old image if it exists
                if ($service->$field) {
                    Storage::delete($service->$field);
                }
                // Store the new image
                $data[$field] = $request->file($field)->store('service_icons', 'public');
            }
        }
    
        // Update service record in the database
        $service->update($data);
    
        // Update FAQs
        if ($request->filled('faqs')) {
            // Delete existing FAQs for the service
            $service->faqs()->delete();
    
            // Insert new FAQs
            foreach ($request->faqs as $faq) {
                $service->faqs()->create($faq);
            }
        }
    
        // Redirect to the service index with a success message
        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }
    


    /**
     * Remove the specified resource from storage.
     */
   /**
 * Remove the specified resource from storage.
 */
public function destroy(Service $service)
{
    // Define fields with images to be deleted
    $fieldsWithImages = [
        'sec1_image',
        'sec2_service1_icon', 'sec2_service2_icon', 'sec2_service3_icon', 'sec2_service4_icon',
        'sec2_service5_icon', 'sec2_service6_icon',
        'sec3_service1_icon', 'sec3_service2_icon', 'sec3_service3_icon', 'sec3_service4_icon',
    ];

    // Delete associated image files
    foreach ($fieldsWithImages as $field) {
        if ($service->$field) {
            // Use Storage::disk('public')->delete() for deleting files from the 'public' disk
            Storage::disk('public')->delete($service->$field);
        }
    }

  
    $service->faqs()->delete();

    // Delete the service
    $service->delete();

    return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
}

}

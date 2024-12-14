<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ServiceFaq;
use Illuminate\Support\Facades\Storage;

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
        $request->validate([
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
    
        $data = $request->except('faqs', 'sec1_image', 'sec2_service1_icon', 'sec2_service2_icon', 'sec2_service3_icon', 'sec2_service4_icon', 'sec2_service5_icon', 'sec2_service6_icon', 'sec3_service1_icon', 'sec3_service2_icon', 'sec3_service3_icon', 'sec3_service4_icon');
    
        // Handle image uploads
        if ($request->hasFile('sec1_image')) {
            $data['sec1_image'] = $request->file('sec1_image')->store('service_images', 'public');
        }
    
        $icons = [
            'sec2_service1_icon', 'sec2_service2_icon', 'sec2_service3_icon', 'sec2_service4_icon',
            'sec2_service5_icon', 'sec2_service6_icon', 'sec3_service1_icon', 'sec3_service2_icon',
            'sec3_service3_icon', 'sec3_service4_icon'
        ];
    
        foreach ($icons as $icon) {
            if ($request->hasFile($icon)) {
                $data[$icon] = $request->file($icon)->store('service_icons', 'public');
            }
        }
        $service = Service::create($data);
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
    $request->validate([
        'slug' => 'required|unique:services,slug,' . $service->id,
        'meta_title' => 'required|string',
        'meta_description' => 'required|string',
        'headerscript' => 'nullable|string',
        'short_description' => 'nullable|string',
        'sec1_heading' => 'nullable|string',
        'sec1_description' => 'nullable|string',
        'sec1_image' => 'nullable|image|max:2048',

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

        'faqs' => 'nullable|array',
        'faqs.*.question' => 'required_with:faqs|string',
        'faqs.*.answer' => 'required_with:faqs|string',
    ]);

    // Update the service fields
    $data = $request->except(['sec1_image', 'sec2_service1_icon', 'sec2_service2_icon', 'sec2_service3_icon', 'sec2_service4_icon', 'sec2_service5_icon', 'sec2_service6_icon', 'sec3_service1_icon', 'sec3_service2_icon', 'sec3_service3_icon', 'sec3_service4_icon', 'faqs']);
    
    // Handle file uploads for section images and icons
    $fieldsWithImages = [
        'sec1_image',
        'sec2_service1_icon',
        'sec2_service2_icon',
        'sec2_service3_icon',
        'sec2_service4_icon',
        'sec2_service5_icon',
        'sec2_service6_icon',
        'sec3_service1_icon',
        'sec3_service2_icon',
        'sec3_service3_icon',
        'sec3_service4_icon',
    ];

    foreach ($fieldsWithImages as $field) {
        if ($request->hasFile($field)) {
            // Delete old image if exists
            if ($service->$field) {
                Storage::delete($service->$field);
            }
            // Store new image
            $data[$field] = $request->file($field)->store('service_icons', 'public');
        }
    }
    $service->update($data);

    // Update FAQs
    if ($request->filled('faqs')) {
        $service->faqs()->delete(); // Remove existing FAQs
        foreach ($request->faqs as $faq) {
            $service->faqs()->create($faq); // Add new FAQs
        }
    }

    return redirect()->route('services.index')->with('success', 'Service updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->faqs()->delete(); // Remove associated FAQs
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}

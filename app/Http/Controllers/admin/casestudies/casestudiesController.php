<?php

namespace App\Http\Controllers\admin\casestudies;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\BlogFaq;
class casestudiesController extends Controller
{
     /**
     * Display a listing of the case-studies.
     */
    public function index()
    {
        $blogs = Blog::where('type','case-studies')->latest()->paginate(10);
        return view('admin.casestudies.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new blog.
     */
    public function create()
    {
        return view('admin.casestudies.create');
    }

    /**
     * Store a newly created blog in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'short_description' => 'required|string',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp',
            'tags' => 'nullable|array',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'headerscript' => 'nullable|string',
            'faqs.*.question' => 'nullable|string',
            'faqs.*.answer' => 'nullable|string',

        ]);

        // Handle image upload
        $imagePath = $request->file('image')->store('blogs', 'public');

        // Generate slug and handle duplicates
        $slug = Str::slug($request->title);
        $originalSlug = $slug;
        $counter = 1;
        while (Blog::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$counter}";
            $counter++;
        }

        // Create the blog
        $blog = Blog::create([
            'title' => $request->title,
            'slug' => $slug,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'image' => $imagePath,
            'tags' => $request->tags,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'headerscript' => $request->headerscript,
            'type'=> 'case-studies',
        ]);

        // Add FAQs
       if ($request->has('faqs')) {
    foreach ($request->faqs as $faq) {
        // Only save if question is not empty
        if (!empty($faq['question'])) {
            $blog->faqs()->create([
                'question' => $faq['question'],
                'answer' => $faq['answer'] ?? null,
            ]);
        }
    }
}


        return redirect()->route('case-studies.index')->with('success', 'Case Studies created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = Blog::with('faqs')->findOrFail($id); // Find the blog with its FAQs
        return view('admin.casestudies.show', compact('blog'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::with('faqs')->findOrFail($id); // Find the blog with its FAQs
        return view('admin.casestudies.edit', compact('blog'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string',
            'short_description' => 'required|string',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'tags' => 'nullable|array',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'headerscript' => 'nullable|string',
            'faqs.*.question' => 'nullable|string',
            'faqs.*.answer' => 'nullable|string',
        ]);
    
        $blog = Blog::findOrFail($id);
    
        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
            $blog->image = $imagePath;
        }
    
        // Update blog details
        $blog->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'tags' => $request->tags,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'headerscript' => $request->headerscript,
        ]);
    
        // Handle FAQs
        $faqIds = []; // Array to track updated FAQ IDs
    
        if ($request->has('faqs')) {
            foreach ($request->faqs as $faq) {
                $faqData = [
                    'question' => $faq['question'],
                    'answer' => $faq['answer'],
                    'blog_id' => $blog->id,
                ];
    
                if (isset($faq['id'])) {
                    // Update existing FAQ
                    $updatedFaq = BlogFaq::findOrFail($faq['id']);
                    $updatedFaq->update($faqData);
                    $faqIds[] = $faq['id'];
                } else {
                    // Create new FAQ
                    $newFaq = BlogFaq::create($faqData);
                    $faqIds[] = $newFaq->id;
                }
            }
        }
    
        // Remove FAQs that are not in the request
        BlogFaq::where('blog_id', $blog->id)->whereNotIn('id', $faqIds)->delete();
    
        return redirect()->route('case-studies.index')->with('success', 'Case Studies updated successfully!');
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete(); // Automatically deletes associated FAQs due to cascading
        return redirect()->route('case-studies.index')->with('success', 'Case Studies deleted successfully!');
    }
  
}

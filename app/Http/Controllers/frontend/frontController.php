<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class frontController extends Controller
{ 
    
    public function index()
    {
        
        return view('frontend.index');
    }
    public function about()
    {
        
        return view('frontend.about');
    }
    public function service()
    {
        
        return view('frontend.service');
    }
    public function gallery()
    {
        $gallery = GalleryImage::all();
        
        return view('frontend.gallery', compact('gallery'));
    }
    public function blog()
{
    $blogs = Blog::latest()->paginate(6); // Fetch blogs with pagination (6 per page)
    return view('frontend.blog', compact('blogs'));
}
public function show($slug)
{
    $blog = Blog::where('slug', $slug)->firstOrFail();
    $relatedBlogs = Blog::where('id', '!=', $blog->id)->orderBy('created_at', 'desc')->limit(3)->get();

    // Ensure tags are always an array
    if (is_array($blog->tags)) {
        // If it's already an array, use it directly
        $tags = $blog->tags;
    } else {
        // If it's a string, explode it into an array
        $tags = explode(',', $blog->tags);
    }

    // Optional: Trim spaces around each tag if needed
    $tags = array_map('trim', $tags);

    // dd($tags);  // For debugging purposes, check the result of the split

    return view('frontend.single_blog', compact('blog', 'relatedBlogs', 'tags'));
}



}

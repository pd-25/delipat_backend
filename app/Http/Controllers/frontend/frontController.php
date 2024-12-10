<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\GalleryImage;
use App\Models\MetaData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class frontController extends Controller
{ 
    
    public function index()
    {
        $blogs = Blog::take(3)->get();
        $pagemeta = MetaData::where('page_name', 'home')->first();
        return view('frontend.index', compact('blogs','pagemeta'));
    }
    public function about()
    {
        $pagemeta = MetaData::where('page_name', 'about-us')->first();
        return view('frontend.about', compact('pagemeta'));
    }
    public function service()
    {
        $pagemeta = MetaData::where('page_name', 'service')->first();
        return view('frontend.service',compact('pagemeta'));
    }
    public function gallery()
    {
        $gallery = GalleryImage::all();
        $pagemeta = MetaData::where('page_name', 'gallery')->first();
        return view('frontend.gallery', compact('gallery','pagemeta'));
    }
    public function blog()
{    $pagemeta = MetaData::where('page_name', 'blog')->first();
    $blogs = Blog::where('type','blog')->latest()->paginate(10);
    return view('frontend.blog', compact('blogs','pagemeta'));
}
public function case_study()
{    $pagemeta = MetaData::where('page_name', 'case-study')->first();
    $blogs = Blog::where('type','case-studies')->latest()->paginate(10);
    return view('frontend.casestudy', compact('blogs','pagemeta'));
}
public function showblog($slug)
{
    $blog = Blog::where('slug', $slug )->firstOrFail();
    $pagemeta = $blog;
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
    // dd($blog->faqs);

    return view('frontend.single_blog', compact('blog', 'relatedBlogs', 'tags','pagemeta'));
}

public function industry(){
    $pagemeta = MetaData::where('page_name', 'industry')->first();
    return view('frontend.industry',compact('pagemeta'));
}
public function contactus()
{
    $pagemeta = MetaData::where('page_name', 'contact-us')->first();
    return view('frontend.contactus',compact('pagemeta'));
}

public function casestudies()
{    $pagemeta = MetaData::where('page_name', 'blog')->first();
    $blogs = Blog::where('type','case-study')->latest()->paginate(10);
    return view('frontend.blog', compact('blogs','pagemeta'));
}
public function showcasestudies($slug)
{
    $blog = Blog::where('slug', $slug )->firstOrFail();
    $pagemeta = $blog;
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
    // dd($blog->faqs);

    return view('frontend.single_blog', compact('blog', 'relatedBlogs', 'tags','pagemeta'));
}

public function hubspot()
{
    // If $pagemeta is needed, retrieve it as done in other methods.
    $pagemeta = MetaData::where('page_name', 'hubspot')->first();

    return view('frontend.hubspot', compact('pagemeta'));        
}
public function youtubeVideos()
{
    $apiKey = "AIzaSyDJmryfxg7LFrsZl4tL3tmC_j58wd9ED9g"; // Replace with your API Key
    $channelId = "UCcFHbtQkU3q4oq-5V9E-7nw"; // Replace with your Channel ID
    $apiUrl = "https://www.googleapis.com/youtube/v3/search?key=$apiKey&channelId=$channelId&part=snippet&type=video&order=date&maxResults=10";

    $response = Http::get($apiUrl);

    if ($response->ok()) {
        $videos = $response->json()['items'];
        dd($videos);
        return view('frontend.layout.videos', compact('videos'));
    } 
}

    
}

<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::where('status', 'published');
        
        if ($request->has('category')) {
            $query->where('blog_category_id', $request->category);
        }
        
        $blogs = $query->paginate(9);
        $categories = BlogCategory::all();
        
        return view('blogs.index', compact('blogs', 'categories'));
    }
    
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();
            
        $relatedBlogs = Blog::where('blog_category_id', $blog->blog_category_id)
            ->where('id', '!=', $blog->id)
            ->where('status', 'published')
            ->limit(3)
            ->get();
            
        return view('blogs.show', compact('blog', 'relatedBlogs'));
    }
}

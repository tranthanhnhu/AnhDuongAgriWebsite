<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::where('is_featured', true)
            ->where('status', 'active')
            ->limit(8)
            ->get();
            
        $featuredBlogs = Blog::where('is_featured', true)
            ->where('status', 'published')
            ->limit(3)
            ->get();
            
        return view('home', compact('featuredProducts', 'featuredBlogs'));
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function search(Request $request)
    {
        $query = $request->get('q');
        
        if (empty($query)) {
            return response()->json(['products' => [], 'blogs' => []]);
        }
        
        $products = Product::where('name', 'like', "%{$query}%")
            ->orWhere('short_description', 'like', "%{$query}%")
            ->where('status', 'active')
            ->limit(5)
            ->get();
            
        $blogs = Blog::where('title', 'like', "%{$query}%")
            ->orWhere('short_description', 'like', "%{$query}%")
            ->where('status', 'published')
            ->limit(5)
            ->get();
            
        return response()->json([
            'products' => $products,
            'blogs' => $blogs
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProdCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::where('status', 'active');
        
        if ($request->has('category')) {
            $query->where('prod_category_id', $request->category);
        }
        
        $products = $query->paginate(12);
        $categories = ProdCategory::all();
        
        return view('products.index', compact('products', 'categories'));
    }
    
    public function show($slug)
    {
        $product = Product::where('slug', $slug)
            ->where('status', 'active')
            ->firstOrFail();
            
        $relatedProducts = Product::where('prod_category_id', $product->prod_category_id)
            ->where('id', '!=', $product->id)
            ->where('status', 'active')
            ->limit(4)
            ->get();
            
        return view('products.show', compact('product', 'relatedProducts'));
    }
}

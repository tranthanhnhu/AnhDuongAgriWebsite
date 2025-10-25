<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProdCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('prodCategory')->latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = ProdCategory::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'descriptions' => 'nullable|string',
            'additional_info' => 'nullable|string',
            'review' => 'nullable|string',
            'original_price' => 'nullable|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0',
            'prod_category_id' => 'nullable|exists:prod_categories,id',
            'is_featured' => 'boolean',
            'link_shoppe' => 'nullable|url',
            'link_fb' => 'nullable|url',
            'link_lazada' => 'nullable|url',
            'status' => 'required|in:active,inactive',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['is_featured'] = $request->has('is_featured');

        Product::create($data);

        return redirect()->route('admin.products.index')->with('success', 'Sản phẩm đã được tạo thành công!');
    }

    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = ProdCategory::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'descriptions' => 'nullable|string',
            'additional_info' => 'nullable|string',
            'review' => 'nullable|string',
            'original_price' => 'nullable|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0',
            'prod_category_id' => 'nullable|exists:prod_categories,id',
            'is_featured' => 'boolean',
            'link_shoppe' => 'nullable|url',
            'link_fb' => 'nullable|url',
            'link_lazada' => 'nullable|url',
            'status' => 'required|in:active,inactive',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['is_featured'] = $request->has('is_featured');

        $product->update($data);

        return redirect()->route('admin.products.index')->with('success', 'Sản phẩm đã được cập nhật thành công!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Sản phẩm đã được xóa thành công!');
    }
}

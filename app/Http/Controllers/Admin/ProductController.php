<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProdCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'short_description' => 'nullable|string',
                'descriptions' => 'nullable|string',
                'additional_info' => 'nullable|string',
                'review' => 'nullable|string',
                'original_price' => 'nullable|numeric|min:0',
                'sale_price' => 'nullable|numeric|min:0',
                'prod_category_id' => 'nullable|exists:prod_categories,id',
                'is_featured' => 'nullable|in:on,1,true',
                'link_shoppe' => 'nullable|url',
                'link_fb' => 'nullable|url',
                'link_lazada' => 'nullable|url',
                'status' => 'required|in:active,inactive',
                'img_1' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
                'img_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
                'img_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput()
                ->with('error', 'Có lỗi validation: ' . implode(', ', $e->validator->errors()->all()));
        }

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['is_featured'] = $request->has('is_featured');

        // Debug logging
        \Log::info('Product Store Data:', [
            'request_data' => $request->all(),
            'processed_data' => $data,
            'is_featured_raw' => $request->input('is_featured'),
            'is_featured_has' => $request->has('is_featured')
        ]);

        // Handle image uploads
        if ($request->hasFile('img_1')) {
            $data['img_1'] = $request->file('img_1')->store('products', 'public');
        }
        if ($request->hasFile('img_2')) {
            $data['img_2'] = $request->file('img_2')->store('products', 'public');
        }
        if ($request->hasFile('img_3')) {
            $data['img_3'] = $request->file('img_3')->store('products', 'public');
        }

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
            'is_featured' => 'nullable|in:on,1,true',
            'link_shoppe' => 'nullable|url',
            'link_fb' => 'nullable|url',
            'link_lazada' => 'nullable|url',
            'status' => 'required|in:active,inactive',
            'img_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'img_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'img_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['is_featured'] = $request->has('is_featured');

        // Handle image uploads
        if ($request->hasFile('img_1')) {
            // Delete old image
            if ($product->img_1) {
                Storage::disk('public')->delete($product->img_1);
            }
            $data['img_1'] = $request->file('img_1')->store('products', 'public');
        }
        if ($request->hasFile('img_2')) {
            // Delete old image
            if ($product->img_2) {
                Storage::disk('public')->delete($product->img_2);
            }
            $data['img_2'] = $request->file('img_2')->store('products', 'public');
        }
        if ($request->hasFile('img_3')) {
            // Delete old image
            if ($product->img_3) {
                Storage::disk('public')->delete($product->img_3);
            }
            $data['img_3'] = $request->file('img_3')->store('products', 'public');
        }

        $product->update($data);

        return redirect()->route('admin.products.index')->with('success', 'Sản phẩm đã được cập nhật thành công!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Sản phẩm đã được xóa thành công!');
    }
}

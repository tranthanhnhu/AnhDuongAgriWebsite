<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProdCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProdCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogCategories = \App\Models\BlogCategory::withCount('blogs')->get();
        $prodCategories = ProdCategory::withCount('products')->get();
        return view('admin.categories.index', compact('blogCategories', 'prodCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prod-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:prod_categories,slug',
            'description' => 'nullable|string',
        ]);

        $slug = $request->slug ?: Str::slug($request->name);

        ProdCategory::create([
            'name' => $request->name,
            'slug' => $slug,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.prod-categories.index')->with('success', 'Danh mục sản phẩm đã được tạo thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProdCategory $prodCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProdCategory $prodCategory)
    {
        return view('admin.prod-categories.edit', compact('prodCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProdCategory $prodCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:prod_categories,slug,' . $prodCategory->id,
            'description' => 'nullable|string',
        ]);

        $slug = $request->slug ?: Str::slug($request->name);

        $prodCategory->update([
            'name' => $request->name,
            'slug' => $slug,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.prod-categories.index')->with('success', 'Danh mục sản phẩm đã được cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProdCategory $prodCategory)
    {
        $prodCategory->delete();
        return redirect()->route('admin.prod-categories.index')->with('success', 'Danh mục sản phẩm đã được xóa thành công!');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::with('blogCategory')->latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = BlogCategory::all();
        return view('admin.blogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'content' => 'required|string',
            'blog_category_id' => 'nullable|exists:blog_categories,id',
            'author' => 'nullable|string|max:255',
            'is_featured' => 'boolean',
            'fb_link' => 'nullable|url',
            'status' => 'required|in:draft,published',
        ]);

        $blog = Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'short_description' => $request->short_description,
            'content' => $request->content,
            'blog_category_id' => $request->blog_category_id,
            'author' => $request->author ?? 'Ánh Dương Agri',
            'is_featured' => $request->has('is_featured'),
            'fb_link' => $request->fb_link,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Bài viết đã được tạo thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $categories = BlogCategory::all();
        return view('admin.blogs.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'content' => 'required|string',
            'blog_category_id' => 'nullable|exists:blog_categories,id',
            'author' => 'nullable|string|max:255',
            'is_featured' => 'boolean',
            'fb_link' => 'nullable|url',
            'status' => 'required|in:draft,published',
        ]);

        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'short_description' => $request->short_description,
            'content' => $request->content,
            'blog_category_id' => $request->blog_category_id,
            'author' => $request->author ?? 'Ánh Dương Agri',
            'is_featured' => $request->has('is_featured'),
            'fb_link' => $request->fb_link,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Bài viết đã được cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Bài viết đã được xóa thành công!');
    }
}

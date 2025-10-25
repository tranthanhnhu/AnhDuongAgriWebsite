<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ApiController extends Controller
{
    public function uploadImage(Request $request)
    {
        // Handle GET request for CKEditor browse
        if ($request->isMethod('GET')) {
            return view('admin.upload.browse');
        }

        // Handle POST request for CKEditor upload
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            
            // Basic validation
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
            if (!in_array($file->getMimeType(), $allowedTypes)) {
                return response()->json(['error' => 'Invalid file type'], 400);
            }
            
            if ($file->getSize() > 5 * 1024 * 1024) { // 5MB
                return response()->json(['error' => 'File too large'], 400);
            }
            
            $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('uploads', $filename, 'public');
            
            $url = Storage::url($path);
            
            // Return CKEditor 4 compatible response
            return response()->json([
                'url' => asset($url)
            ]);
        }

        return response()->json(['error' => 'Upload failed'], 400);
    }
}

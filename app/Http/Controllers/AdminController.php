<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $stats = [
            'total_products' => Product::count(),
            'total_blogs' => Blog::count(),
            'new_contacts' => Contact::where('status', 'new')->count(),
            'featured_products' => Product::where('is_featured', true)->count(),
        ];

        $recentProducts = Product::latest()->limit(5)->get();
        $recentContacts = Contact::latest()->limit(5)->get();

        return view('admin.dashboard', compact('stats', 'recentProducts', 'recentContacts'));
    }

    public function contacts()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function updateContact(Request $request, Contact $contact)
    {
        $contact->update(['status' => $request->status]);
        return redirect()->back()->with('success', 'Cập nhật trạng thái thành công!');
    }
}

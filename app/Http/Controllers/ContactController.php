<?php
namespace App\Http\Controllers;
use App\Models\{Inquiry, Page};
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $page = Page::with('seoMeta')->where('slug', 'contact')->first();
        return view('pages.contact', compact('page'));
    }

    public function store(Request $request)
    {
        $validated =$request->validate([
            'type' => 'required|in:business,agency,consulting,foundation,speaking,general',
            'name' => 'required|string|max:120',
            'email' => 'required|email|max:160',
            'phone' => 'nullable|string|max:40',
            'organization' => 'nullable|string|max:120',
            'subject' => 'nullable|string|max:180',
            'message' => 'required|string|min:10|max:4000',
        ]);

        Inquiry::create([...$validated, 'ip_address' =>$request->ip(), 'status' => 'new']);
        return back()->with('success', 'Thank you. Your inquiry has been received.');
    }
}

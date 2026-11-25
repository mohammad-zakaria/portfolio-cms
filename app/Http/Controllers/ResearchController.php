<?php
namespace App\Http\Controllers;
use App\Models\{Page, Publication};

class ResearchController extends Controller
{
    public function index()
    {
        $page = Page::with('seoMeta')->where('slug', 'research')->first();$publications = Publication::published()->get();
        return view('research.index', compact('page', 'publications'));
    }
}

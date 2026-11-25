<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Page;
use App\Models\Post;
use App\Models\Project;
use App\Models\Publication;
use App\Models\Venture;

class HomeController extends Controller
{
    public function __invoke()
    {
        $page = Page::with('seoMeta')->where('slug', 'home')->first();

        return view('pages.home', [
            'page' => $page,
            'ventures' => Venture::published()->where('is_featured', true)->get(),
            'projects' => Project::published()->where('is_featured', true)->take(4)->get(),
            'currentRole' => Experience::where('is_current', true)->orderBy('sort_order')->first(),
            'publicationsCount' => Publication::published()->count(),
            'latestPosts' => Post::published()->with('category')->take(3)->get(),
        ]);
    }
}

<?php
namespace App\Http\Controllers;
use App\Models\{Education, Experience, Page, Skill};

class PageController extends Controller
{
    public function about()
    {
        $page = Page::with('seoMeta')->where('slug', 'about')->first();
        return view('pages.about', [
            'page' => $page,
            'experiences' => Experience::orderBy('sort_order')->get(),
            'educations' => Education::orderBy('sort_order')->get(),
            'skills' => Skill::orderBy('sort_order')->get()->groupBy('category'),
        ]);
    }

    public function show(Page $page)
    {
        abort_unless($page->is_published, 404);$page->load('seoMeta');
        return view('pages.show', compact('page'));
    }
}

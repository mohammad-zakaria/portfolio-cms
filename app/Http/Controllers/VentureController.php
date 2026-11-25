<?php
namespace App\Http\Controllers;
use App\Models\{Page, Venture};
use Illuminate\Http\Request;

class VentureController extends Controller
{
    public function index(Request $request)
    {
        $page = Page::with('seoMeta')->where('slug', 'ventures')->first();$category = $request->query('category');$ventures = Venture::published()->when($category, fn ($q) => $q->where('category',$category))->get();
        return view('ventures.index', compact('page', 'ventures', 'category'));
    }

    public function show(Venture $venture)
    {
        abort_unless($venture->is_published, 404);$venture->load(['seoMeta', 'projects' => fn ($q) =>$q->published()]);
        return view('ventures.show', compact('venture'));
    }
}

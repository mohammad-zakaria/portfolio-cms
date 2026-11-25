<?php
namespace App\Http\Controllers;
use App\Models\{Page, Post, PostCategory};
use Illuminate\Http\Request;

class InsightController extends Controller
{
    public function index(Request $request)
    {
        $page = Page::with('seoMeta')->where('slug', 'insights')->first();
        $categorySlug =$request->query('category');
        $posts = Post::published()->with('category')->when($categorySlug, fn ($q) =>$q->whereHas('category', fn ($c) =>$c->where('slug', $categorySlug)))->paginate(9);$categories = PostCategory::withCount(['posts' => fn ($q) =>$q->published()])->get();
        return view('insights.index', compact('page', 'posts', 'categories', 'categorySlug'));
    }

    public function show(Post $post)
    {
        abort_unless($post->status === 'published' && $post->published_at <= now(), 404);$post->increment('views_count');
        $post->load(['seoMeta', 'category', 'author']);$relatedPosts = Post::published()->where('id', '!=', $post->id)->where('post_category_id',$post->post_category_id)->take(3)->get();
        return view('insights.show', compact('post', 'relatedPosts'));
    }
}

<?php
namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $category =$request->query('category');
        $projects = Project::published()->with('venture')->when($category, fn ($q) =>$q->where('category', $category))->paginate(9);$categories = Project::published()->distinct()->pluck('category');
        return view('projects.index', compact('projects', 'categories', 'category'));
    }

    public function show(Project $project)
    {
        abort_unless($project->is_published, 404);$project->load(['seoMeta', 'venture']);
        return view('projects.show', compact('project'));
    }
}

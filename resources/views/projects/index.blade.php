@extends('layouts.app', ['seoTitle' => 'Projects & Case Studies'])
@section('content')
<section class="max-w-6xl mx-auto px-6 py-16">
<span class="text-xs font-mono uppercase tracking-widest text-emerald-500">Engineering &amp; Operations</span>
<h1 class="font-display text-4xl sm:text-5xl font-extrabold mt-2 mb-3">Projects &amp; Case Studies</h1>
<p class="text-slate-600 dark:text-slate-400 max-w-2xl mb-10">Selected enterprise systems, security architectures, web platforms, and e-commerce growth operations.</p>
<div class="grid md:grid-cols-3 gap-6">
@forelse($projects as $project)
<a href="{{ route('projects.show', $project) }}" class="group p-6 rounded-2xl border border-slate-200/80 dark:border-white/[0.08] bg-white/80 dark:bg-white/[0.02] hover:border-emerald-500/50 hover:-translate-y-0.5 transition-all flex flex-col justify-between">
<div><span class="text-[11px] font-mono uppercase px-2.5 py-1 rounded bg-emerald-500/10 text-emerald-500">{{ $project->category }}</span>
<h2 class="font-display font-bold text-lg mt-4 group-hover:text-emerald-400 transition">{{ $project->title }}</h2>
<p class="text-sm text-slate-600 dark:text-slate-400 mt-2 leading-relaxed">{{ $project->summary }}</p></div>
<div class="mt-5 pt-4 border-t border-slate-200/60 dark:border-white/[0.06] text-xs font-semibold text-emerald-500">Read Case Study &rarr;</div>
</a>
@empty
<div class="col-span-3 p-10 rounded-2xl border border-dashed border-slate-300 dark:border-white/15 text-center text-sm text-slate-500">No projects published yet. Add your first case study in <a href="/portal-mz" class="text-emerald-500 underline">/portal-mz</a>.</div>
@endforelse
</div><div class="mt-10">{{ $projects->links() }}</div></section>
@endsection

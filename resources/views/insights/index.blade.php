@extends('layouts.app', ['seoModel' => $page])
@section('content')
<section class="max-w-6xl mx-auto px-6 py-16">
<span class="text-xs font-mono uppercase tracking-widest text-emerald-500">Executive Perspectives</span>
<h1 class="font-display text-4xl sm:text-5xl font-extrabold mt-2 mb-3">Insights</h1>
<p class="text-slate-600 dark:text-slate-400 mb-10">{{ $page->subtitle ?? "Essays on enterprise engineering, web security, ethical business, and leadership." }}</p>
<div class="grid md:grid-cols-3 gap-6">
@forelse($posts as $post)
<a href="{{ route('insights.show', $post) }}" class="group p-6 rounded-2xl border border-slate-200/80 dark:border-white/[0.08] bg-white/80 dark:bg-white/[0.02] hover:border-emerald-500/50 hover:-translate-y-0.5 transition-all flex flex-col justify-between">
<div><span class="text-xs font-mono text-emerald-500">{{ $post->reading_time_minutes ?? 4 }} min read</span>
<h2 class="font-display font-bold text-lg mt-2 group-hover:text-emerald-400 transition">{{ $post->title }}</h2>
<p class="text-sm text-slate-600 dark:text-slate-400 mt-2 line-clamp-3">{{ $post->excerpt }}</p></div>
<p class="text-xs text-slate-500 mt-5 pt-3 border-t border-slate-200/60 dark:border-white/[0.06]">{{ $post->published_at?->format("M d, Y") }}</p>
</a>
@empty
<div class="col-span-3 p-10 rounded-2xl border border-dashed border-slate-300 dark:border-white/15 text-center text-sm text-slate-500">No articles published yet. Write your first insight in <a href="/portal-mz" class="text-emerald-500 underline">/portal-mz</a>.</div>
@endforelse
</div><div class="mt-10">{{ $posts->links() }}</div></section>
@endsection

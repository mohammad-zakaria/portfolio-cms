@extends("layouts.app", ["seoModel" => $project])
@section("content")
<article class="max-w-4xl mx-auto px-6 py-16">
<a href="{{ route("projects.index") }}" class="inline-flex items-center gap-1.5 text-xs font-mono text-emerald-500 hover:underline mb-8">&larr; Back to Projects</a>
<div class="flex flex-wrap items-center gap-3 text-xs font-mono mb-4">
<span class="px-2.5 py-1 rounded bg-emerald-500/10 text-emerald-500 uppercase">{{ $project->category }}</span>
@if($project->venture)<span class="text-slate-500">Venture: {{ $project->venture->name }}</span>@endif
@if($project->completed_at)<span class="text-slate-500">&bull; {{ $project->completed_at->format("M Y") }}</span>@endif</div>
<h1 class="font-display text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">{{ $project->title }}</h1>
<p class="text-lg text-slate-600 dark:text-slate-400 mt-4 leading-relaxed">{{ $project->summary }}</p>
<div class="flex flex-wrap items-center gap-3 mt-6">
@if($project->live_url)<a href="{{ $project->live_url }}" target="_blank" rel="noopener" class="px-4 py-2 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-semibold text-xs transition">Visit Live System &nearr;</a>@endif
@if($project->repo_url)<a href="{{ $project->repo_url }}" target="_blank" rel="noopener" class="px-4 py-2 rounded-xl border border-slate-300 dark:border-white/15 hover:border-emerald-500/50 font-semibold text-xs transition">Repository &nearr;</a>@endif
</div>
@if(!empty($project->tech_stack))<div class="flex flex-wrap gap-2 mt-6">
@foreach($project->tech_stack as $tech)<span class="text-xs font-mono px-3 py-1 rounded-lg border border-slate-200 dark:border-white/10 bg-white/60 dark:bg-white/[0.03]">{{ $tech }}</span>@endforeach
</div>@endif
@if($project->thumbnail_path)<img src="{{ asset("storage/" . $project->thumbnail_path) }}" alt="{{ $project->title }}" class="w-full rounded-2xl border border-slate-200 dark:border-white/10 mt-8 object-cover max-h-[440px]">@endif
<div class="grid gap-6 mt-12">
@if($project->challenge)<section class="p-7 rounded-2xl border border-slate-200/80 dark:border-white/[0.08] bg-white/80 dark:bg-white/[0.02]"><span class="text-xs font-mono uppercase tracking-widest text-emerald-500">01 // Problem Space</span><h2 class="font-display text-xl font-bold mt-1 mb-3">The Challenge</h2><div class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed space-y-3">{!! $project->challenge !!}</div></section>@endif
@if($project->solution)<section class="p-7 rounded-2xl border border-slate-200/80 dark:border-white/[0.08] bg-white/80 dark:bg-white/[0.02]"><span class="text-xs font-mono uppercase tracking-widest text-emerald-500">02 // Engineering &amp; Strategy</span><h2 class="font-display text-xl font-bold mt-1 mb-3">The Solution</h2><div class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed space-y-3">{!! $project->solution !!}</div></section>@endif
@if($project->results)<section class="p-7 rounded-2xl border border-emerald-500/30 bg-emerald-500/[0.04]"><span class="text-xs font-mono uppercase tracking-widest text-emerald-500">03 // Measurable Outcome</span><h2 class="font-display text-xl font-bold mt-1 mb-3">Results &amp; Impact</h2><div class="text-sm text-slate-700 dark:text-slate-200 leading-relaxed space-y-3">{!! $project->results !!}</div></section>@endif
</div></article>
@endsection

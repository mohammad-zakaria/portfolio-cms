@extends('layouts.app', ['seoModel' => $page])
@section('content')
<section class="max-w-4xl mx-auto px-6 py-16">
<span class="text-xs font-mono uppercase tracking-widest text-emerald-500">Academic Contributions</span>
<h1 class="font-display text-4xl sm:text-5xl font-extrabold mt-2 mb-3">Research &amp; Publications</h1>
<p class="text-slate-600 dark:text-slate-400 mb-10">{{ $page->subtitle ?? "Peer-reviewed IEEE conference papers and technical research." }}</p>
<div class="space-y-6">
@forelse($publications as $pub)
<article x-data="{ open: false }" class="p-7 rounded-2xl border border-slate-200/80 dark:border-white/[0.08] bg-white/80 dark:bg-white/[0.02]">
<div class="flex flex-wrap items-center justify-between gap-2 text-xs font-mono text-emerald-500 mb-3"><span>{{ $pub->venue }} &bull; {{ $pub->published_year }}</span>@if($pub->doi)<span>DOI: {{ $pub->doi }}</span>@endif</div>
<h2 class="font-display text-xl font-bold leading-snug">{{ $pub->title }}</h2>
@if(!empty($pub->authors))<p class="text-xs text-slate-500 mt-2">Authors: {{ implode(", ", $pub->authors) }}</p>@endif
<div class="flex flex-wrap gap-3 mt-5">
<button type="button" @click="open = !open" class="px-3.5 py-1.5 rounded-lg text-xs font-semibold border border-slate-300 dark:border-white/15 hover:border-emerald-500/50 transition">Abstract</button>
@if($pub->external_url)<a href="{{ $pub->external_url }}" target="_blank" class="px-3.5 py-1.5 rounded-lg text-xs font-semibold bg-emerald-500 text-slate-950">IEEE Xplore &nearr;</a>@endif
</div>
<div x-show="open" class="mt-4 pt-4 border-t border-slate-200/60 dark:border-white/[0.08] text-sm text-slate-600 dark:text-slate-300 leading-relaxed">{{ $pub->abstract }}</div>
</article>
@empty
<div class="p-10 rounded-2xl border border-dashed border-slate-300 dark:border-white/15 text-center text-sm text-slate-500">Add your two IEEE publications in <a href="/portal-mz" class="text-emerald-500 underline">/portal-mz</a> to display them here.</div>
@endforelse
</div></section>
@endsection

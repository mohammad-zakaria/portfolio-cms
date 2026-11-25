@extends("layouts.app", ["seoModel" => $post])
@section("content")
<div x-data="{ pct: 0, copied: false }" @scroll.window="pct = Math.min(100, Math.max(0, (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100))">
<div class="fixed top-16 left-0 h-0.5 bg-gradient-to-r from-emerald-400 to-teal-400 z-50 transition-all duration-75" :style="`width: ${pct}%`"></div>
<article class="max-w-3xl mx-auto px-6 py-16">
<a href="{{ route("insights.index") }}" class="inline-flex items-center gap-1.5 text-xs font-mono text-emerald-500 hover:underline mb-8">&larr; Back to Insights</a>
<div class="flex flex-wrap items-center gap-3 text-xs font-mono text-slate-500 mb-4">
@if($post->category)<span class="px-2.5 py-1 rounded bg-emerald-500/10 text-emerald-500">{{ $post->category->name }}</span>@endif
<span>{{ $post->published_at?->format("M d, Y") }}</span><span>&bull;</span><span>{{ $post->reading_time_minutes ?? 4 }} min read</span></div>
<h1 class="font-display text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">{{ $post->title }}</h1>
@if($post->excerpt)<p class="text-lg text-slate-600 dark:text-slate-400 mt-5 leading-relaxed">{{ $post->excerpt }}</p>@endif
@if($post->featured_image_path)<img src="{{ asset("storage/" . $post->featured_image_path) }}" alt="{{ $post->title }}" class="w-full rounded-2xl border border-slate-200 dark:border-white/10 mt-8 object-cover max-h-[420px]">@endif
<div class="mt-10 pt-10 border-t border-slate-200/80 dark:border-white/[0.08] space-y-6 text-slate-700 dark:text-slate-300 leading-relaxed text-base">{!! $post->body !!}</div>
@if(!empty($post->tags))<div class="flex flex-wrap gap-2 mt-10 pt-6 border-t border-slate-200/80 dark:border-white/[0.08]">
@foreach($post->tags as $tag)<span class="text-xs font-mono px-3 py-1 rounded-full bg-slate-100 dark:bg-white/5 text-slate-600 dark:text-slate-300">#{{ $tag }}</span>@endforeach
</div>@endif
<div class="mt-10 p-6 rounded-2xl border border-slate-200/80 dark:border-white/[0.08] bg-white/70 dark:bg-white/[0.02] flex flex-wrap items-center justify-between gap-4">
<span class="text-sm font-display font-bold">Share this insight</span>
<div class="flex items-center gap-2.5">
<button type="button" @click="navigator.clipboard.writeText(window.location.href); copied = true; setTimeout(() => copied = false, 2000)" class="px-3.5 py-2 rounded-lg text-xs font-semibold border border-slate-300 dark:border-white/15 hover:border-emerald-500/50 transition">
<span x-show="!copied">Copy Link</span><span x-show="copied" class="text-emerald-500">Copied!</span></button>
<a :href="`https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(window.location.href)}`" target="_blank" rel="noopener" class="px-3.5 py-2 rounded-lg text-xs font-semibold bg-emerald-500 text-slate-950 hover:bg-emerald-400 transition">LinkedIn &nearr;</a>
</div></div></article></div>
@endsection

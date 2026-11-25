@extends("layouts.app", ["seoModel" => $venture])
@section("content")
<article class="max-w-4xl mx-auto px-6 py-16">
<a href="{{ route("ventures.index") }}" class="inline-flex items-center gap-1.5 text-xs font-mono text-emerald-500 hover:underline mb-8">&larr; Back to Ventures</a>
<div class="flex flex-wrap items-center gap-3 text-xs font-mono mb-4">
<span class="px-2.5 py-1 rounded bg-emerald-500/10 text-emerald-500 uppercase">{{ $venture->category }}</span>
<span class="text-slate-500">{{ $venture->role }}</span>
@if($venture->founded_year)<span class="text-slate-500">&bull; Est. {{ $venture->founded_year }}</span>@endif</div>
<h1 class="font-display text-4xl sm:text-5xl font-extrabold tracking-tight">{{ $venture->name }}</h1>
@if($venture->tagline)<p class="text-lg text-emerald-600 dark:text-emerald-400 font-medium mt-2">{{ $venture->tagline }}</p>@endif
<p class="text-base text-slate-600 dark:text-slate-400 mt-4 leading-relaxed">{{ $venture->summary }}</p>
@if($venture->website_url)<div class="mt-6"><a href="{{ $venture->website_url }}" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-semibold text-xs shadow-lg shadow-emerald-500/20 transition">Official Website &nearr;</a></div>@endif
@if(!empty($venture->highlights))<div class="grid sm:grid-cols-2 gap-3 mt-10">
@foreach($venture->highlights as $item)<div class="p-4 rounded-xl border border-slate-200/80 dark:border-white/[0.08] bg-white/70 dark:bg-white/[0.02] flex items-center gap-3 text-sm"><span class="w-2 h-2 rounded-full bg-emerald-500 shrink-0"></span><span>{{ $item }}</span></div>@endforeach
</div>@endif
@if($venture->description)<div class="mt-10 pt-10 border-t border-slate-200/80 dark:border-white/[0.08] space-y-5 text-slate-700 dark:text-slate-300 leading-relaxed">{!! $venture->description !!}</div>@endif
</article>
@endsection

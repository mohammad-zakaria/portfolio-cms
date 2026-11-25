@extends('layouts.app', ['seoModel' => $page])
@section('content')
<section class="max-w-6xl mx-auto px-6 pt-20 pb-16">
<div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-emerald-500/30 bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 text-xs font-mono mb-8">
<span class="relative flex h-2 w-2"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span></span>
<span>CEO &bull; Head of IT &bull; IEEE Researcher</span></div>
<h1 class="font-display text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight leading-[1.06] max-w-4xl">
Architecting <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 via-teal-300 to-cyan-400">resilient technology</span>, ethical ventures &amp; lasting impact.</h1>
<p class="mt-6 text-base sm:text-lg text-slate-600 dark:text-slate-400 max-w-2xl leading-relaxed">
Founder &amp; CEO of Multazim and Multazim Solutions, Head of Department (IT) at Edumax Consultancy, published IEEE researcher, and founder of two Islamic charitable foundations.</p>
<div class="mt-9 flex flex-wrap items-center gap-4">
<a href="{{ route('ventures.index') }}" class="px-6 py-3.5 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-semibold text-sm shadow-xl shadow-emerald-500/20 transition">Explore Ventures &rarr;</a>
<a href="{{ route('about') }}" class="px-6 py-3.5 rounded-xl border border-slate-300 dark:border-white/15 bg-white/50 dark:bg-white/[0.03] hover:border-emerald-500/50 font-semibold text-sm transition">Executive Dossier</a>
<a href="/contact" class="px-5 py-3.5 text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-emerald-400 transition">Initiate Inquiry &nearr;</a>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-16">
<div class="p-5 rounded-2xl border border-slate-200/80 dark:border-white/[0.08] bg-white/70 dark:bg-white/[0.02] backdrop-blur-md">
<p class="font-display text-2xl sm:text-3xl font-extrabold text-emerald-500">4+</p><p class="text-xs text-slate-500 mt-1">Active Organizations &amp; Foundations</p></div>
<div class="p-5 rounded-2xl border border-slate-200/80 dark:border-white/[0.08] bg-white/70 dark:bg-white/[0.02] backdrop-blur-md">
<p class="font-display text-2xl sm:text-3xl font-extrabold">IEEE</p><p class="text-xs text-slate-500 mt-1">Peer-Reviewed Publications</p></div>
<div class="p-5 rounded-2xl border border-slate-200/80 dark:border-white/[0.08] bg-white/70 dark:bg-white/[0.02] backdrop-blur-md">
<p class="font-display text-2xl sm:text-3xl font-extrabold">Full-Stack</p><p class="text-xs text-slate-500 mt-1">Enterprise Systems &amp; Security</p></div>
<div class="p-5 rounded-2xl border border-slate-200/80 dark:border-white/[0.08] bg-white/70 dark:bg-white/[0.02] backdrop-blur-md">
<p class="font-display text-2xl sm:text-3xl font-extrabold text-emerald-500">Global</p><p class="text-xs text-slate-500 mt-1">Commerce, SaaS &amp; FBA Ops</p></div>
</div></section>
<section class="max-w-6xl mx-auto px-6 py-12">
<div class="flex items-end justify-between mb-8"><div><span class="text-xs font-mono uppercase tracking-widest text-emerald-500">Portfolio Ecosystem</span><h2 class="font-display text-2xl sm:text-3xl font-bold mt-1">Ventures &amp; Leadership</h2></div>
<a href="{{ route('ventures.index') }}" class="text-xs font-semibold text-emerald-500 hover:underline">View All &rarr;</a></div>
<div class="grid md:grid-cols-2 gap-6">
@foreach($ventures as $v)
<a href="{{ route('ventures.show', $v) }}" class="group relative p-7 rounded-2xl border border-slate-200/80 dark:border-white/[0.08] bg-white/80 dark:bg-white/[0.02] hover:border-emerald-500/50 hover:-translate-y-0.5 transition-all duration-300">
<div class="flex items-center justify-between text-xs mb-4"><span class="px-2.5 py-1 rounded-md bg-emerald-500/10 text-emerald-500 font-mono uppercase">{{ $v->category }}</span><span class="text-slate-500 font-medium">{{ $v->role }}</span></div>
<h3 class="font-display text-xl font-bold group-hover:text-emerald-400 transition">{{ $v->name }}</h3>
<p class="text-sm text-slate-600 dark:text-slate-400 mt-2.5 leading-relaxed">{{ $v->summary }}</p>
<div class="mt-5 inline-flex items-center gap-1.5 text-xs font-semibold text-emerald-500">Inspect Venture <span class="group-hover:translate-x-1 transition-transform">&rarr;</span></div>
</a>
@endforeach
</div></section>
<section class="max-w-6xl mx-auto px-6 py-12">
<div class="rounded-3xl border border-emerald-500/20 bg-gradient-to-br from-emerald-500/10 via-transparent to-teal-500/5 p-8 sm:p-12 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
<div><span class="text-xs font-mono uppercase tracking-widest text-emerald-500">Direct Collaboration</span>
<h2 class="font-display text-2xl sm:text-3xl font-bold mt-1">Building something ambitious?</h2>
<p class="text-sm text-slate-600 dark:text-slate-400 mt-2 max-w-xl">Available for enterprise software architecture, strategic technology advisory, research collaboration, and philanthropic initiatives.</p></div>
<a href="/contact" class="shrink-0 px-6 py-3.5 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-semibold text-sm shadow-lg shadow-emerald-500/20 transition">Start a Conversation &rarr;</a>
</div></section>
@endsection

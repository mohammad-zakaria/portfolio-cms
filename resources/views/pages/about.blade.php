@extends('layouts.app', ['seoModel' => $page])
@section('content')
<section class="max-w-5xl mx-auto px-6 py-16 space-y-16">
<div class="max-w-3xl"><span class="text-xs uppercase tracking-widest font-semibold text-emerald-500">Executive Profile</span>
<h1 class="font-bold text-4xl sm:text-5xl mt-2 mb-4">About Mohammad Zakaria</h1>
<p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">{{ $page->subtitle ?? "Founder & CEO of Multazim and Multazim Solutions, Head of Information Technology at Edumax Consultancy, published IEEE researcher, and philanthropist." }}</p></div>
<div class="grid sm:grid-cols-3 gap-6">
<div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/40"><h3 class="font-bold text-lg mb-2">Technology & Security</h3><p class="text-sm text-slate-600 dark:text-slate-400">Architecting resilient web applications, enterprise CRM/ERP platforms, and hardened server infrastructures.</p></div>
<div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/40"><h3 class="font-bold text-lg mb-2">Ethical Entrepreneurship</h3><p class="text-sm text-slate-600 dark:text-slate-400">Scaling Multazim in retail e-commerce and Multazim Solutions in software, marketing, and Amazon FBA.</p></div>
<div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/40"><h3 class="font-bold text-lg mb-2">Social Impact</h3><p class="text-sm text-slate-600 dark:text-slate-400">Driving sustainable community welfare through Mohammad Zakaria Foundation and Multazim Foundation.</p></div>
</div>
<div><h2 class="text-2xl font-bold mb-6">Leadership & Experience</h2><div class="space-y-5 border-l-2 border-emerald-500/30 pl-6 ml-2">
@foreach($experiences as $exp)
<div class="relative p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/40">
<div class="flex flex-wrap justify-between items-start gap-2"><div><h3 class="font-bold text-lg">{{ $exp->role }}</h3><p class="text-emerald-500 text-sm font-medium">{{ $exp->organization }}</p></div>
<span class="text-xs px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-800">{{ $exp->start_date?->format("M Y") }} - {{ $exp->is_current ? "Present" : $exp->end_date?->format("M Y") }}</span></div>
@if($exp->summary)<p class="text-sm text-slate-600 dark:text-slate-400 mt-3">{{ $exp->summary }}</p>@endif
</div>
@endforeach
</div></div>
<div><h2 class="text-2xl font-bold mb-6">Academic Background</h2><div class="grid md:grid-cols-2 gap-6">
@foreach($educations as $edu)
<div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/40">
<span class="text-xs font-semibold text-emerald-500">{{ $edu->start_year }} - {{ $edu->end_year ?? "Present" }}</span>
<h3 class="font-bold text-lg mt-1">{{ $edu->degree }}</h3><p class="text-sm text-slate-600 dark:text-slate-400 mt-1">{{ $edu->institution }}</p></div>
@endforeach
</div></div></section>
@endsection

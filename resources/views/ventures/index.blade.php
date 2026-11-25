@extends('layouts.app', ['seoModel' => $page])
@section('content')
<section class="max-w-6xl mx-auto px-6 py-16">
    <h1 class="font-['Plus_Jakarta_Sans'] text-4xl font-extrabold mb-3">Ventures & Foundations</h1>
    <p class="text-slate-600 dark:text-slate-400 mb-8">{{ $page?->subtitle }}</p>
    <div class="grid md:grid-cols-2 gap-6">
        @foreach($ventures as $venture)
            <a href="{{ route('ventures.show', $venture) }}" class="group p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/40 hover:border-emerald-500/50 transition">
                <span class="text-xs uppercase font-semibold text-emerald-500">{{ $venture->category }} &bull; {{ $venture->role }}</span>
                <h2 class="font-['Plus_Jakarta_Sans'] text-xl font-bold mt-2 group-hover:text-emerald-500 transition">{{ $venture->name }}</h2>
                <p class="text-sm text-slate-600 dark:text-slate-400 mt-2">{{ $venture->summary }}</p>
            </a>
        @endforeach
    </div>
</section>
@endsection

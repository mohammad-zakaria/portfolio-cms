<!DOCTYPE html>
<html lang="en" class="scroll-smooth" x-data="{ dark: localStorage.getItem('theme') !== 'light', mobileMenu: false }" :class="{ 'dark': dark }">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<x-seo-head :model="$seoModel ?? null" :title="$seoTitle ?? null" :description="$seoDescription ?? null" />
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>tailwind.config = { darkMode: "class", theme: { extend: { fontFamily: { sans: ["Inter", "sans-serif"], display: ["Plus Jakarta Sans", "sans-serif"], mono: ["JetBrains Mono", "monospace"] } } } }</script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<style>.bg-grid{background-size:40px 40px;background-image:linear-gradient(to right,rgba(148,163,184,0.06) 1px,transparent 1px),linear-gradient(to bottom,rgba(148,163,184,0.06) 1px,transparent 1px);}</style>
</head>
<body class="bg-slate-50 text-slate-900 dark:bg-[#060911] dark:text-slate-100 antialiased selection:bg-emerald-500/30 selection:text-emerald-200 min-h-screen flex flex-col relative">
<div class="fixed inset-0 bg-grid pointer-events-none z-0"></div>
<div class="fixed top-0 left-1/2 -translate-x-1/2 w-[900px] h-[420px] bg-emerald-500/10 dark:bg-emerald-500/[0.07] blur-[130px] rounded-full pointer-events-none z-0"></div>
<header class="sticky top-0 z-50 backdrop-blur-xl bg-white/75 dark:bg-[#060911]/75 border-b border-slate-200/70 dark:border-white/[0.07]">
<div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
<a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
<span class="w-8 h-8 rounded-lg bg-gradient-to-br from-emerald-400 to-teal-600 text-slate-950 font-display font-extrabold text-sm flex items-center justify-center shadow-lg shadow-emerald-500/20">MZ</span>
<span class="font-display font-bold tracking-tight text-base">Mohammad Zakaria</span></a>
<nav class="hidden md:flex items-center gap-1 text-sm font-medium text-slate-600 dark:text-slate-300">
<a href="{{ route('home') }}" class="px-3.5 py-1.5 rounded-lg hover:bg-slate-100 dark:hover:bg-white/5 transition {{ request()->routeIs('home') ? 'text-emerald-500 bg-emerald-500/10' : '' }}">Home</a>
<a href="{{ route('about') }}" class="px-3.5 py-1.5 rounded-lg hover:bg-slate-100 dark:hover:bg-white/5 transition {{ request()->routeIs('about') ? 'text-emerald-500 bg-emerald-500/10' : '' }}">About</a>
<a href="{{ route('ventures.index') }}" class="px-3.5 py-1.5 rounded-lg hover:bg-slate-100 dark:hover:bg-white/5 transition {{ request()->routeIs('ventures.*') ? 'text-emerald-500 bg-emerald-500/10' : '' }}">Ventures</a>
<a href="{{ route('projects.index') }}" class="px-3.5 py-1.5 rounded-lg hover:bg-slate-100 dark:hover:bg-white/5 transition {{ request()->routeIs('projects.*') ? 'text-emerald-500 bg-emerald-500/10' : '' }}">Projects</a>
<a href="{{ route('research.index') }}" class="px-3.5 py-1.5 rounded-lg hover:bg-slate-100 dark:hover:bg-white/5 transition {{ request()->routeIs('research.*') ? 'text-emerald-500 bg-emerald-500/10' : '' }}">Research</a>
<a href="{{ route('insights.index') }}" class="px-3.5 py-1.5 rounded-lg hover:bg-slate-100 dark:hover:bg-white/5 transition {{ request()->routeIs('insights.*') ? 'text-emerald-500 bg-emerald-500/10' : '' }}">Insights</a>
</nav>
<div class="flex items-center gap-2.5">
<button type="button" @click="dark = !dark; localStorage.setItem('theme', dark ? 'dark' : 'light')" class="p-2 rounded-lg border border-slate-200 dark:border-white/10 hover:border-emerald-500/50 transition text-xs" aria-label="Toggle Theme">
<span x-show="dark">&#9728;</span><span x-show="!dark">&#9790;</span></button>
<a href="/contact" class="hidden sm:inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-semibold text-xs shadow-lg shadow-emerald-500/20 transition">Let's Talk &rarr;</a>
<button type="button" @click="mobileMenu = !mobileMenu" class="md:hidden p-2 rounded-lg border border-slate-200 dark:border-white/10">&#9776;</button>
</div></div>
<div x-show="mobileMenu" class="md:hidden px-6 pb-4 space-y-2 border-t border-slate-200 dark:border-white/10 pt-3 text-sm">
<a href="{{ route('home') }}" class="block py-1.5">Home</a><a href="{{ route('about') }}" class="block py-1.5">About</a>
<a href="{{ route('ventures.index') }}" class="block py-1.5">Ventures</a><a href="{{ route('projects.index') }}" class="block py-1.5">Projects</a>
<a href="{{ route('research.index') }}" class="block py-1.5">Research</a><a href="{{ route('insights.index') }}" class="block py-1.5">Insights</a>
<a href="/contact" class="block py-1.5 text-emerald-500 font-semibold">Contact</a>
</div></header>
<main class="flex-1 relative z-10">@yield('content')</main>
<footer class="relative z-10 border-t border-slate-200/80 dark:border-white/[0.07] mt-24 bg-white/40 dark:bg-[#060911]/60 backdrop-blur-md">
<div class="max-w-6xl mx-auto px-6 py-12 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-slate-500">
<div class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-emerald-500"></span><span>&copy; {{ date('Y') }} Mohammad Zakaria. All rights reserved.</span></div>
<div class="flex items-center gap-5"><a href="{{ route('about') }}" class="hover:text-emerald-400 transition">Profile</a><a href="{{ route('ventures.index') }}" class="hover:text-emerald-400 transition">Ventures</a><a href="{{ route('research.index') }}" class="hover:text-emerald-400 transition">IEEE Research</a><a href="/portal-mz" class="hover:text-emerald-400 transition">Portal</a></div>
</div></footer></body></html>

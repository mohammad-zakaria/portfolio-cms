@extends('layouts.app', ['seoModel' => $page])
@section('content')
<section class="max-w-3xl mx-auto px-6 py-16">
    <h1 class="font-['Plus_Jakarta_Sans'] text-4xl font-extrabold mb-3">Contact</h1>
    <p class="text-slate-600 dark:text-slate-400 mb-8">{{ $page?->subtitle ?? 'Reach out for business partnerships, software & Amazon FBA inquiries, consulting, or charitable initiatives.' }}</p>
    @if(session('success'))
        <div class="mb-6 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-600 dark:text-emerald-400 text-sm font-medium">{{ session('success') }}</div>
    @endif
    <form method="POST" action="{{ route('contact.store') }}" class="space-y-5 p-8 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/40">
        @csrf
        <div class="grid sm:grid-cols-2 gap-5">
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider mb-2">Inquiry Type</label>
                <select name="type" required class="w-full rounded-xl border border-slate-300 dark:border-slate-700 bg-transparent px-4 py-2.5 text-sm">
                    <option value="business" class="dark:bg-slate-900">Business / Multazim</option>
                    <option value="agency" class="dark:bg-slate-900">Software, CRM/ERP & Amazon FBA</option>
                    <option value="consulting" class="dark:bg-slate-900">IT & Strategy Consulting</option>
                    <option value="foundation" class="dark:bg-slate-900">Foundation / Charity</option>
                    <option value="speaking" class="dark:bg-slate-900">Speaking / Research</option>
                    <option value="general" class="dark:bg-slate-900">General Inquiry</option>
                </select>
            </div>
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider mb-2">Your Name</label>
                <input type="text" name="name" value="{{ old('name') }}" required class="w-full rounded-xl border border-slate-300 dark:border-slate-700 bg-transparent px-4 py-2.5 text-sm">
            </div>
        </div>
        <div class="grid sm:grid-cols-2 gap-5">
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider mb-2">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" required class="w-full rounded-xl border border-slate-300 dark:border-slate-700 bg-transparent px-4 py-2.5 text-sm">
            </div>
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider mb-2">Organization (Optional)</label>
                <input type="text" name="organization" value="{{ old('organization') }}" class="w-full rounded-xl border border-slate-300 dark:border-slate-700 bg-transparent px-4 py-2.5 text-sm">
            </div>
        </div>
        <div>
            <label class="block text-xs font-semibold uppercase tracking-wider mb-2">Message</label>
            <textarea name="message" rows="5" required class="w-full rounded-xl border border-slate-300 dark:border-slate-700 bg-transparent px-4 py-2.5 text-sm">{{ old('message') }}</textarea>
        </div>
        <button type="submit" class="px-6 py-3 rounded-xl bg-slate-900 text-white dark:bg-emerald-500 dark:text-slate-950 font-semibold text-sm hover:opacity-90 transition">Send Inquiry</button>
    </form>
</section>
@endsection

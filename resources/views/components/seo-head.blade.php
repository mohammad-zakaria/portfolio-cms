@props(['model' => null, 'title' => null, 'description' => null])
@php
    $siteName = \App\Models\SiteSetting::get('site_name', 'Mohammad Zakaria');
    $seo = $model?->seoMeta;
    $metaTitle = $title ?? $seo?->meta_title ?? $model?->meta_title ?? $siteName;
    $fullTitle = str_contains($metaTitle, $siteName) ? $metaTitle : "{$metaTitle} — {$siteName}";
    $metaDescription = $description ?? $seo?->meta_description ?? $model?->meta_description ?? 'Founder, CEO & Head of Information Technology';
@endphp
<title>{{ $fullTitle }}</title>
<meta name="description" content="{{ $metaDescription }}">
<meta name="robots" content="{{ $seo?->robots ?? 'index, follow' }}">
<link rel="canonical" href="{{ $seo?->canonical_url ?? url()->current() }}">

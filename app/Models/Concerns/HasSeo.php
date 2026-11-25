<?php
namespace App\Models\Concerns;
use App\Models\SeoMeta;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasSeo
{
    public function seoMeta(): MorphOne { return $this->morphOne(SeoMeta::class, 'seoable'); }
    public function getMetaTitleAttribute(): string { return $this->seoMeta?->meta_title ?? ($this->title ?? $this->name ?? config('app.name')); }
    public function getMetaDescriptionAttribute(): string { return $this->seoMeta?->meta_description ?? str($this->summary ?? $this->excerpt ?? '')->limit(155)->toString(); }
}

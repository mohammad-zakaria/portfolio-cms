<?php
namespace App\Models;
use App\Models\Concerns\HasSeo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasSeo;
    protected $fillable = ['title', 'slug', 'authors', 'venue', 'published_year', 'abstract', 'doi', 'external_url', 'pdf_path', 'citation_bibtex', 'is_published', 'sort_order'];
    protected function casts(): array { return ['authors' => 'array', 'is_published' => 'boolean']; }
    public function scopePublished(Builder $q): Builder { return$q->where('is_published', true)->orderByDesc('published_year'); }
}

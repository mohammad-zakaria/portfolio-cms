<?php
namespace App\Models;
use App\Models\Concerns\HasSeo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasSeo;
    protected $fillable = ['venture_id', 'title', 'slug', 'category', 'client_name', 'summary', 'challenge', 'solution', 'results', 'tech_stack', 'thumbnail_path', 'gallery', 'live_url', 'repo_url', 'completed_at', 'is_featured', 'is_published', 'sort_order'];
    protected function casts(): array { return ['tech_stack' => 'array', 'gallery' => 'array', 'completed_at' => 'date', 'is_featured' => 'boolean', 'is_published' => 'boolean']; }
    public function venture(): BelongsTo { return $this->belongsTo(Venture::class); }
    public function scopePublished(Builder $q): Builder { return$q->where('is_published', true)->orderBy('sort_order'); }
}

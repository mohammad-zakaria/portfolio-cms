<?php
namespace App\Models;
use App\Models\Concerns\HasSeo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Venture extends Model
{
    use HasSeo;
    protected $fillable = ['name', 'slug', 'role', 'category', 'tagline', 'summary', 'description', 'highlights', 'logo_path', 'cover_image_path', 'website_url', 'founded_year', 'is_featured', 'is_published', 'sort_order'];
    protected function casts(): array { return ['highlights' => 'array', 'is_featured' => 'boolean', 'is_published' => 'boolean']; }
    public function projects(): HasMany { return $this->hasMany(Project::class)->orderBy('sort_order'); }
    public function scopePublished(Builder $q): Builder { return$q->where('is_published', true)->orderBy('sort_order'); }
}

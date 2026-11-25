<?php
namespace App\Models;
use App\Models\Concerns\HasSeo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasSeo;
    protected $fillable = ['title', 'slug', 'template', 'subtitle', 'content_blocks', 'is_published'];
    protected function casts(): array { return ['content_blocks' => 'array', 'is_published' => 'boolean']; }
    public function scopePublished(Builder $q): Builder { return$q->where('is_published', true); }
}

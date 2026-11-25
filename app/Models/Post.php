<?php
namespace App\Models;
use App\Models\Concerns\HasSeo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasSeo;
    protected $fillable = ['post_category_id', 'user_id', 'title', 'slug', 'excerpt', 'body', 'featured_image_path', 'tags', 'reading_time_minutes', 'status', 'published_at', 'views_count'];
    protected function casts(): array { return ['tags' => 'array', 'published_at' => 'datetime']; }
    public function category(): BelongsTo { return $this->belongsTo(PostCategory::class, 'post_category_id'); }
    public function author(): BelongsTo { return $this->belongsTo(User::class, 'user_id'); }
    public function scopePublished(Builder $q): Builder { return$q->where('status', 'published')->where('published_at', '<=', now())->orderByDesc('published_at'); }
}

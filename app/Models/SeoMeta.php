<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class SeoMeta extends Model
{
    protected $fillable = ['seoable_type', 'seoable_id', 'meta_title', 'meta_description', 'canonical_url', 'og_image_path', 'robots', 'schema_json'];
    protected function casts(): array { return ['schema_json' => 'array']; }
    public function seoable(): MorphTo { return $this->morphTo(); }
}

<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class SiteSetting extends Model
{
    protected $fillable = ['group', 'key', 'value', 'type'];
    public static function get(string $key, mixed$default = null): mixed
    {
        return Cache::rememberForever("site_setting_{$key}", function () use ($key,$default) {
            $s = static::where('key',$key)->first();
            if (! $s) return$default;
            return match ($s->type) {
                'json' => json_decode($s->value, true) ?? $default,
                'boolean' => filter_var($s->value, FILTER_VALIDATE_BOOLEAN),
                default => $s->value ?? $default,
            };
        });
    }
    protected static function booted(): void
    {
        static::saved(fn (self $s) => Cache::forget("site_setting_{$s->key}"));
        static::deleted(fn (self $s) => Cache::forget("site_setting_{$s->key}"));
    }
}

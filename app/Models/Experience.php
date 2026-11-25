<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['organization', 'role', 'location', 'start_date', 'end_date', 'is_current', 'summary', 'achievements', 'sort_order'];
    protected function casts(): array { return ['start_date' => 'date', 'end_date' => 'date', 'is_current' => 'boolean', 'achievements' => 'array']; }
}

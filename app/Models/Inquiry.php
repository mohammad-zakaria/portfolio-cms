<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = ['type', 'name', 'email', 'phone', 'organization', 'subject', 'message', 'status', 'admin_notes', 'ip_address'];
}

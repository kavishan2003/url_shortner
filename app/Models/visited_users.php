<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class visited_users extends Model
{
    protected $fillable = [
        'short_code',
        'visited_ip'
    ];
}

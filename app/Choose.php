<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choose extends Model
{
    protected $fillable = [
        'title', 'content', 'image', 'is_deleted'
    ];
}

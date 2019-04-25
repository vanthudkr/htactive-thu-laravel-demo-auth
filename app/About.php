<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title', 'icon', 'content', 'is_deleted'
    ];
}

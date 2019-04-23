<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class CatService extends Model
{
    protected $fillable = [
        'title', 'icon', 'content', 'parent_id', 'is_deleted'
    ];

    public function service()
    {
        return $this->hasMany('App\Service', 'parent_id', 'id');
    }
}

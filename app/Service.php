<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title', 'content', 'image', 'catService_id', 'is_deleted'
    ];

    public function catService()
    {
        return $this->belongsTo('App\CatService', 'catService_id');
    }

    public function changeIsDelete($id)
    {
        $services = Service::where("catService_id", $id)->first();

        $services->is_deleted = 0;
        $services->save();

        return  $services;
    }
}

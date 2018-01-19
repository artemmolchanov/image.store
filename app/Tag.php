<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function images()
    {
        return $this->belongsToMany(Image::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'pivot'
    ];
    public function images()
    {
        return $this->belongsToMany(Image::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}

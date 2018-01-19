<?php

namespace App;

class Image extends Model
{
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
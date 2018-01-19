<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 19.01.2018
 * Time: 15:32
 */

namespace App;

class Image extends Model
{
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Http\Resources\Image as ImageResource;

class ApiController
{
    public function getImageByTag(Tag $tag)
    {
        $images = $tag->images()->paginate(5);
        return ImageResource::collection($images);
    }
}
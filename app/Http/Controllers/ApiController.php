<?php

namespace App\Http\Controllers;

use App\Image;
use App\Tag;
use App\Http\Resources\Image as ImageResource;

class ApiController
{
    public function getImagesByTag(Tag $tag)
    {
        $images = $tag->images()->paginate(5);
        return ImageResource::collection($images);
    }

    public function getImages()
    {
        $images = Image::paginate(5);
        return ImageResource::collection($images);
    }
}
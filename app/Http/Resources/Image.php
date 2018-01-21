<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

/**
 * @property mixed name
 * @property mixed path
 * @property mixed tags
 * @property mixed created_at
 */
class Image extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'path' => $this->path,
            'tags' => $this->tags,
            'created_at' => $this->created_at,
        ];
    }
}

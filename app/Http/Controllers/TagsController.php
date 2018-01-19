<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index(Tag $tag)
    {
        $images = $tag->images()->get();

        return view('images.index', compact('images'));
    }
}

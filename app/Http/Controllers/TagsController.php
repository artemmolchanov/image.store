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

    public function store()
    {
        $this->validate(request(), ['name' => 'required|max:255']);
        $tag = new Tag;
        $tag->name = \request('name');
        $tag->save();

        return back();
    }
}

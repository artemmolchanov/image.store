<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 19.01.2018
 * Time: 16:20
 */

namespace App\Http\Controllers;

use App\Image;
use App\Tag;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Img;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::latest();

        if ($request = request(['month', 'year'])) {
            $images->filter($request);
        }
        $images = $images->get();

        return view('images.index', compact('images'));
    }

    public function show(Image $image)
    {
        return view('images.show', compact('image'));
    }


    public function create()
    {
        $tags = Tag::all();
        return view('images.create')->with('tags',$tags);
    }

    public function store()
    {
        $image = new Image;

        $this->validate(request(), [
            'name' => 'required',
        ]);

        $image->name = request('name');

        $images = request()->file('images');
        $filename = time() . '.' . $images->getClientOriginalExtension();
        $location = public_path('storage/' . $filename);
        Img::make($images)->save($location);

        $image->path = $filename;

        $image->save();

        $image->tags()->sync(\request('tags'), false);

        return redirect('/');
    }
}
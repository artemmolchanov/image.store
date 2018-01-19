<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 19.01.2018
 * Time: 16:20
 */

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Img;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::latest()->get();

        return view('images.index', compact('images'));
    }

    public function show(Image $image)
    {
        return view('images.show', compact('image'));
    }


    public function create()
    {
        return view('images.create');
    }

    public function store(Request $request)
    {
        $image = new Image;

        $this->validate(request(), [
            'name' => 'required',
            'path'  => 'required'
        ]);

        $image->name = $request->name;

        $images = $request->file('images');
        $filename = time() . '.' . $images->getClientOriginalExtension();
        $location = public_path('storage/' . $filename);
        Img::make($images)->save($location);

        $image->path = $filename;

        $image->save();
        return redirect('/');
    }
}
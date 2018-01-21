@extends('layout')

@section('content')

    <div class="col-sm-8 blog-main">

        <h1>Upload an image</h1>


        <form method="post" action="/images" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>

            <div class="form-group">
                <label for="image">Image</label><br>
                <input type="file" name="images"  id="image">
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </form>



        @include('layouts.errors')

    </div>


    <div class="col-md-4">

        @include('tags.create')

    </div>

@endsection
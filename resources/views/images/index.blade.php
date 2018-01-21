@extends('layout')

@section('content')
        @foreach($images as $image)

            @include('images.image')

        @endforeach

@endsection

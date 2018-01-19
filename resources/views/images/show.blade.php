@extends('layout')

@section('content')

    <div class="album py-5 bg-light">

        <h1>{{ $image->name }}</h1>

        @if(count($image->tags))
            <ul>
                @foreach($image->tags as $tag)
                    <li>
                        <a href="/posts/tags/{{ $tag->name }}">
                            {{ $tag->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif

        <hr>



    </div>

@endsection
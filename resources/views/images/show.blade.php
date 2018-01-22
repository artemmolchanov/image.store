@extends('layout')

@section('content')

    <div class="album py-5 bg-light">

        <h1>{{ $image->name }}</h1>

        <p class="blog-post-meta">Tags:
            @if(count($image->tags))
                @foreach($image->tags as $tag)
                    <a href="/images/tags/{{ $tag->name }}" >
                        #{{ $tag->name }}
                    </a>
                @endforeach
            @endif
        </p>

        <img  src="/storage/{{ $image->path }}" alt="Card image cap" width="500">

    </div>

@endsection
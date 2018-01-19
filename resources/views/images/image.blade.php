<div class="col-md-4">
    <div class="card mb-4 box-shadow">
        <a href="/images/{{ $image->id }}">{{ $image->name }}</a></h2>

    <p class="blog-post-meta">
        {{ $image->created_at->toFormattedDateString() }}
    </p>
        <img class="card-img-top" src="/storage/{{ $image->path }}" alt="Card image cap">

    </div>
</div>

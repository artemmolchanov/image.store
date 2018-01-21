<h1>Create new tag</h1>

<form method="post" action="/images/tag" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
</form>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Image store</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="css/album.css" rel="stylesheet">
</head>

<body>

@include('layouts.nav')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Image Store</h1>
            <p>
                <a href="/images/create" class="btn btn-primary my-2">Save image</a>
            </p>
        </div>
    </section>
<div class="container">
    <div class="row">
<div class="col-md-10">
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">

                    @yield('content')



                </div>
            </div>
        </div>
</div>

<div class="col-md-2">
    @include('layouts.sidebar')
</div>
    </div>
</div>
@include('layouts.footer')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

</body>
</html>

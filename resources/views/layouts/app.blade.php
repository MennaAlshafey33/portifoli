<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
        }
        .navbar {
            border-radius: 50px;
            margin: 10px;
            padding: 10px;
        }
        .container {
            padding-top: 20px;
        }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded-pill">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Codezilla Blog</a>
        <button class="navbar-toggler btn btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="{{ route('posts.index') }}">All Posts</a>
            </div>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-4">
    <div class="card shadow p-4">
        @yield('content')
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://unpkg.com/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
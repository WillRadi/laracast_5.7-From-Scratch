<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Bands')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <style>
        .is-played {
            text-decoration: line-through
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="nav">
            <div class="nav-center">
                <a href="/bands" class="nav-item">Home</a>
                <a href="bands/create" class="nav-item">Create</a>
            </div>
        </nav>
    </div>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
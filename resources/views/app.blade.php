<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gallery App')</title>
    <link rel="stylesheet" href="{{ asset('css/ app.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NusaPost</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- <div class="container"> --}}
        <main>
            @yield('content')
        </main>
    {{-- </div> --}}
</body>
</html>

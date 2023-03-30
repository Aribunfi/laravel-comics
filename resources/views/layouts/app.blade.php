<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    @vite('resources/js/app.js')
</head>
<body>
    <h1>@yield('title')</h1>
    
    <main>
        @yield('content')
    </main>


</body>
</html>
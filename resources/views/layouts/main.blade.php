<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eros</title>
        @yield('headers')  
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
    @yield('header') 
    @yield('content') 
    <footer>
        @yield('footer')
    </footer>
</body>
</html>
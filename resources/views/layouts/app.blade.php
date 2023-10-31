<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,initial-scale=.0"> 
    <title>DevStagram-@yield('titulo')</title>
     @vite('resources/css/app.css') 
</head> 
<body> 
    <nav>
        <a href="/">Principal</a>
        <a href="/nosotros">Nosotros</a>
    <a href="/tienda">Tienda</a>
    </nav>

    <h1 class="text-4xl font-bold">@yield('titulo')</h1>

    <hr>

    @yield('contenido')
</body>
</html>
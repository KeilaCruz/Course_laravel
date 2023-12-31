<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,initial-scale=.0"> 
    <title>DevStagram-@yield('titulo')</title>
     @vite('resources/css/app.css') 
</head> 
<body class="bg-gray-100"> 
    <header class="p-5 border-b bg-white shadow">
      <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-black">DevStagram</h1>
        <nav class="flex gap-2 items-center">
            <a class="font-bold uppercase text-gray-600" href="#">Login</a>
            <a class="font-bold uppercase text-gray-600" href={{ route('register')}}>Crear cuenta</a>
        </nav>
        </div>   
    </header>
    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-xl mb-10">@yield('titulo')</h2>
        @yield('contenido')</main>
    <footer class="text-center p-5 text-gray-500 font-bold uppercase mt-10">
        DevStagram- Todos los derechos reservados {{ now()->year}}
    </footer>
</body>
</html>
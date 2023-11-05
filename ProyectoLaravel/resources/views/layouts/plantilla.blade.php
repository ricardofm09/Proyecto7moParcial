<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @vite(['resources/js/app.js'])

    <title>@yield('titulo')</title>
</head>

<body>
    @include('partials.navbar')
    
    @yield('contenido')

    <pre>

    </pre>

<div class="container-fluid bg-light text-center p-3"> 
    <p class="small">&copy; Todos los derechos reservados :: BeastMex S.A de C.V :: Copyright</p>
</div>
</body>

</html>
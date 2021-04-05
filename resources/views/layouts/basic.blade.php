<!DOCTYPE html>
<html lang="pt-br">
<head>
    {{--       titulo recebido como parametro   --}}
    <title>Calculadora - @yield('titulo')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
@include('layouts.topo')
@yield('conteudo')
</body>
</html>

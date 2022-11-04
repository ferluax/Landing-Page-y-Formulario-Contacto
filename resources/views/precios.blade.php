<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Precios</title>
</head>
<body>
    <h1>{{$nombre_pagina}}</h1>

    @foreach ($precios as $plan => $precio)
        Paquete # {{$loop->iteration}}
        <p>
            <h2>{{ strtoupper($plan) }}: ${{ number_format($precio) }}</h2>
        </p>
        @if($loop->last)
            <hr>
        @endif
        
    @endforeach
        
    @if (!empty($cupon))

        @switch($cupon)
            @case('10porciento')
                10 porciento aplicado.
                @break
            @case('20porciento')
                20 porciento aplicado.
                @break
            @default
                Otro porcentaje.
        @endswitch

        {!! $texto_cupon !!}
    @endif

</body>
</html>
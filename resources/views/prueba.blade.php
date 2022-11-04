<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios envio y recepcion</title>
</head>
<body>
    <h1>Contacto</h1>

    <form action="/recibeFormContacto" method="POST">
        @csrf
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" value="{{old ('nombre')}}">
        @error('nombre')
            <i>{{$message}}</i>
        @enderror
        <br>

        <label for="correo">Correo:</label><br>
        <input type="email" name="correo" id="correo" value="{{old ('correo')}}">
        @error('correo')
            <i>{{$message}}</i>
        @enderror
        <br>

        <label for="mensaje">Mensaje</label><br>
        <textarea name="mensaje" id="mensaje" cols="30" rows="5" >{{old ('mensaje')}}</textarea>
        @error('mensaje')
            <i>{{$message}}</i>
        @enderror

        <input type="submit" value="Enviar">
    </form>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>

    <h1>Formulario</h1>

    @if(!@empty($version))
        <p>Codigo: {{ $version }}</p>

        <form action="" method="GET">

            <!-- Nombre-->
            <div class="form-group row">
                <label for="inputnombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                  <input name="nombre" type="text" class="form-control" id="inputnombre" placeholder="Nombre" value="Fernanda Sanchez">
                </div>
            </div>
    
            <!-- Correo-->
            <div class="form-group row">
                <label for="inputcorreo" class="col-sm-2 col-form-label">Correo</label>
                <div class="col-sm-10">
                  <input name="correo" type="text" class="form-control" id="inputcorreo" placeholder="Correo" value="yameaburri137@yahoo.com">
                </div>
            </div>
    
            <!-- Comentario-->
            <div class="form-group row">
                    <label for="inputcomentario" class="col-sm-2 col-form-label">Comentario</label>
                <div class="col-sm-10">
                    <textarea id="inputcomentario" name="comentario" rows="4" cols="50"></textarea>
                </div>
            </div>
    
            <!-- Boton de envio-->
            <div class="form-group row">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
              
        </form>


    @else
    <form action="" method="GET">

        <!-- Nombre-->
        <div class="form-group row">
            <label for="inputnombre" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input name="nombre" type="text" class="form-control" id="inputnombre" placeholder="Nombre">
            </div>
        </div>

        <!-- Correo-->
        <div class="form-group row">
            <label for="inputcorreo" class="col-sm-2 col-form-label">Correo</label>
            <div class="col-sm-10">
              <input name="correo" type="text" class="form-control" id="inputcorreo" placeholder="Correo">
            </div>
        </div>

        <!-- Comentario-->
        <div class="form-group row">
                <label for="inputcomentario" class="col-sm-2 col-form-label">Comentario</label>
            <div class="col-sm-10">
                <textarea id="inputcomentario" name="comentario" rows="4" cols="50"></textarea>
            </div>
        </div>

        <!-- Boton de envio-->
        <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
          
    </form>
    @endif

    
</body>
</html>
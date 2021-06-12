<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/estilos.css" type="text/css" />
    <title>Uso básico de PHP con formularios</title>
  </head>
  <body>
    <?php
        if($_GET['error']){
          echo "<h5>". $_GET['error'] ."</h5>";
        }
    ?>
    <h3>Ingrese datos para casa</h3>
    <div class="miformulario">
        <form action="agrega_casa.php" method="post">
            <label for="propietario">Ingrese datos de propietario</label>
            <input type="text" name="propietario" id="propietario" required/>
            <br/>
            <br/>
            <label for="metros_cuadrados">Metros cuadrados de la casa</label>
            <input type="number" name="metros_cuadrados" id="metros_cuadrados" step="0.01" required/>
            <br/>
            <br/>
            <label for="precio_metro_cuadrado">Precio de metro cuadrado</label>
            <input type="number" name="precio_metro_cuadrado" id="precio_metro_cuadrado" step="0.01" required/>
            <br/>
            <br/>
            <label for="ciudad">Ciudad</label>
            <input type="text" name="ciudad" id="ciudad" required/>
            <br/>
            <br/>

            <input type="submit" name="enviar" id="enviar" value="Guardar Casa" />
        </form>
    </div>

    <hr><br/>
    <div>
        [<a href="index.php">Inicio</a>] - [<a href="nueva_casa.php">+Casas</a>] - [<a href="nueva_constructora.php">+Constructoras</a>]
    </div>
  </body>
</html>

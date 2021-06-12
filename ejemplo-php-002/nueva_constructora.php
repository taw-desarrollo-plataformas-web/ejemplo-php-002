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
    <h3>Ingrese datos para Constructoras</h3>
    <div class="miformulario">
        <form action="agrega_constructora.php" method="post">
            <label for="nombre">Ingrese Nombre de la Constructora</label>
            <input type="text" name="nombre" id="nombre" required/>
            <br/>
            <br/>
            <label for="ciudad">Ingrese Ciudad de la Constructora</label>
            <input type="text" name="ciudad" id="ciudad" required/>
            <br/>
            <br/>
            <label for="ambito">Ámbito de la Constructora</label>
            <input type="text" name="ambito" id="ambito" required/>
            <br/>
            <br/>

            <input type="submit" name="enviar" id="enviar" value="Guardar Constructora" />
        </form>
    </div>

    <hr><br/>
    <div>
        [<a href="index.php">Inicio</a>] - [<a href="nueva_casa.php">+Casas</a>] - [<a href="nueva_constructora.php">+Constructoras</a>]
    </div>
  </body>
</html>

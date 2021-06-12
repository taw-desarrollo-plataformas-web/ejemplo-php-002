<?php
      // proceso para guardar un nuevo registro a la base de datos
      include("basedatos.php");
      $nombre = $_REQUEST['nombre'];
      $ciudad = $_REQUEST['ciudad'];
      $ambito = $_REQUEST['ambito'];
      $cadena = "insert into `constructoras`( `nombre`, `ciudad`,
        `ambito`) values
        ('%s', '%s', '%s');";
      $cadena = sprintf($cadena, $nombre, $ciudad, $ambito);
      echo $cadena;
      $consultaBD = $conectaBD -> query($cadena);

      if($consultaBD){
        // si hay existo con la inserción,
        // se realiza un redirect a index.php
        header("Location: index.php");
      }else{
        // si exite un error
        // se captura el error
        // se hace un redirect a nuevo.php
        // además se envía el mensaje de error
        // como parámetro
        $mensaje = $conectaBD -> error;
        header("Location: nuevo.php?error=".$mensaje);
      }
?>

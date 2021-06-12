<?php
      // proceso para guardar un nuevo registro a la base de datos
      include("basedatos.php");
      $propietario = $_REQUEST['propietario'];
      $metros_cuadrados = doubleval($_REQUEST['metros_cuadrados']);
      $precio_metro_cuadrado = doubleval($_REQUEST['precio_metro_cuadrado']);
      $ciudad = $_REQUEST['ciudad'];
      $costo_final = $metros_cuadrados * $precio_metro_cuadrado;
      $cadena = "insert into `casas`( `propietario`, `metros_cuadrados`,
        `precio_metro_cuadrado`, `costo_final`, `ciudad`) values
        ('%s', '%f', %f, '%f', '%s');";
      $cadena = sprintf($cadena, $propietario, $metros_cuadrados,
      $precio_metro_cuadrado, $costo_final, $ciudad);
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

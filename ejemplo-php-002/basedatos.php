<?php
  // datos para enlace la base de datos
  $servidor = "localhost";
  $usuario = "root";
  $password = "11112222";
  $base_datos = "mobiliaria";
  $conectaBD = new mysqli($servidor, $usuario, $password, $base_datos);
  $conectaBD->set_charset("utf8");
?>

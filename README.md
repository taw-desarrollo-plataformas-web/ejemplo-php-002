# Ejemplo  PHP 

<!--
*** Se usa como template - https://github.com/othneildrew/Best-README-Template
-->


<!-- PROJECT LOGO -->
<br />
<p align="center">
  <a href="https://github.com/taw-desarrollo-plataformas-web/ejemplo-php-002">
    <img src="https://raw.githubusercontent.com/taw-desarrollo-plataformas-web/ejemplo-php-002/main/imgs/portada.png" alt="Logo">
  </a>

  <h3 align="center">Ejemplo de uso de PHP y MySQL</h3>

  <p align="center">
Es un repositorio académico que permite ejemplificar el proceso de ingreso y listado de datos a través de lenguaje de programación PHP en una base de datos MySQL.
  </p>
</p>



<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary><h2 style="display: inline-block">Índice</h2></summary>
  <ol>
    <li>
      <a href="#sobre-el-proyecto">Sobre el proyecto</a>
     </li>
    <li>
      <a href="#Inicio-del-proyecto">Inicio del proyecto</a>
    </li>
    <li><a href="#usos">Usos</a></li>
    <li><a href="#licencia">Licencia</a></li>
    <li><a href="#contacto">Contacto</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## Sobre el proyecto

Es un repositorio académico que permite ejemplificar el proceso de ingreso y listado de datos a través de lenguaje de programación PHP en una base de datos MySQL.


<!-- GETTING STARTED -->
## Inicio del proyecto

Para poder usar el presente proyecto, tomar en consideración lo siguiente:

1. Clonar el repositorio en su máquina local o descargar la carpeta comprimida.

2. Crear una base de datos en MySQL e importar las entidades y registros del archivo: [https://github.com/taw-desarrollo-plataformas-web/ejemplo-php-002/blob/main/sql/data.sql](https://github.com/taw-desarrollo-plataformas-web/ejemplo-php-002/blob/main/sql/data.sql) https://github.com/taw-desarrollo-plataformas-web/ejemplo-php-002/blob/main/sql/data.sql
El nombre de la base de datos que usted debe crear es: **mobiliaria**

La base de datos tiene las siguiente entidades:

![](https://raw.githubusercontent.com/taw-desarrollo-plataformas-web/ejemplo-php-002/main/imgs/diagrama.png) 

3. Agregar la carpeta **ejemplo-php-002** ([https://github.com/taw-desarrollo-plataformas-web/ejemplo-php-002/tree/main/ejemplo-php-002](https://github.com/taw-desarrollo-plataformas-web/ejemplo-php-002/tree/main/ejemplo-php-002) https://github.com/taw-desarrollo-plataformas-web/ejemplo-php-002/tree/main/ejemplo-php-002) ; en su servidor web en su máquina local. Usted puede usar Xampp, Apache, Nginx.
4. Agregar la información necesaria para la conexión a la base de datos. Modificar el archivo **basedatos.php** que está en la carpeta **ejemplo-php-002** 
```php
<?php
  // datos para enlace la base de datos
  $servidor = "localhost";
  $usuario = "su-usuario"; // agregar aquí su usuario de la base de datos
  $password = "su-clave"; // agregar aquí su clave de usuario de la base de datos
  $base_datos = "mobiliaria";
  $conectaBD = new mysqli($servidor, $usuario, $password, $base_datos);
  $conectaBD->set_charset("utf8");
?>
```

<!-- USAGE EXAMPLES -->
## Usos

1. Ingresar a través de un navegador al archivo **index.php** que consta en la carpeta **ejemplo-php-002** 

![](https://raw.githubusercontent.com/taw-desarrollo-plataformas-web/ejemplo-php-002/main/imgs/img_index.png) 

2. Ingresar a través de un navegador al archivo **nueva_casa.php** que consta en la carpeta **ejemplo-php-002** ; para crear una nueva casa.

![](https://raw.githubusercontent.com/taw-desarrollo-plataformas-web/ejemplo-php-002/main/imgs/img-add-casas.png) 

3. Ingresar a través de un navegador al archivo **nueva_constructora.php** que consta en la carpeta **ejemplo-php-002** ; para crear una nueva constructora.
![](https://raw.githubusercontent.com/taw-desarrollo-plataformas-web/ejemplo-php-002/main/imgs/img-add-constructora.png) 

<!-- LICENSE -->
## Licencia

Distributed under the MIT License. See `LICENSE` for more information.



<!-- CONTACT -->
## Contacto

René Elizalde Solano - [@reroes](https://twitter.com/reroes) - rrelizalde@utpl.edu.ec




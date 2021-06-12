<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/estilos.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"> </script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </script>
    <title>Uso básico de PHP</title>
  </head>
  <body>

    <h3>Listado de casas y constructoras para una mobiliaria</h3>
    <div id="miaccordion">
      <h3>Listado de Casas</h3>
      <div>
        <table id="tabla_casas">
          <thead>
            <tr>
              <td>Propietario</td>
              <td>Metros Cuadrados</td>
              <td>Precio x Metro Cuadrado</td>
              <td>Costo Final</td>
              <td>Ciudad</td>
            </tr>
          </thead>
          <?php
          include("basedatos.php");
          function convertirMayuscula($dato){
              // función que permite
              // pasar una cadena a mayúscula
              return strtoupper($dato);
            }
            // se realizar la consulta a la base de datos
            $consultaBD = $conectaBD -> query("select * from casas");
            while($registro = $consultaBD -> fetch_array(MYSQLI_ASSOC)){
              $formato = "<tr>
              <td>%s</td><td>%s</td><td>%s</td><td>%d</td><td>%s</td>
              </tr>";
              // se agrega una fila a la tabla HTML
              echo sprintf($formato,
              convertirMayuscula($registro['propietario']),
              $registro['metros_cuadrados'],
              $registro['precio_metro_cuadrado'],
              $registro['costo_final'],
              convertirMayuscula($registro['ciudad']));
            }
            ?>
          </table>
      </div>
      <h3>Listado de Constructoras</h3>
      <div>
        <table id="tabla_constructoras">
          <thead>
            <tr>
              <td>Nombre de Constructora</td>
              <td>Ciudad</td>
              <td>Ámbito</td>
            </tr>
          </thead>
          <?php
          // se realizar la consulta a la base de datos
          $consultaBD = $conectaBD -> query("select * from constructoras");
          while($registro = $consultaBD -> fetch_array(MYSQLI_ASSOC)){
            $formato = "<tr>
            <td>%s</td><td>%s</td><td>%s</td>
            </tr>";
            // se agrega una fila a la tabla HTML
            echo sprintf($formato,
            convertirMayuscula($registro['nombre']),
            $registro['ciudad'],
            $registro['ambito']);
          }
          ?>
        </table>
      </div>
    </div>
    <hr><br/>
    <div>
        [<a href="index.php">Inicio</a>] - [<a href="nueva_casa.php">+Casas</a>] - [<a href="nueva_constructora.php">+Constructoras</a>]
    </div>
    <script type="text/javascript">
      $(document).ready( function () {
        $('#tabla_casas').DataTable();
        $('#tabla_constructoras').DataTable();
        $( "#miaccordion" ).accordion({
              collapsible: true
        });
      } );
    </script>
  </body>
</html>

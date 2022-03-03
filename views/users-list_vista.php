<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">E-mail</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Estado</th>
        <th scope="col">Fecha Creación</th>
        <th scope="col">Fecha Actualización</th>

      </tr>
    </thead>
    <tbody>
      <?php
      for ($i = 0; $i < 3; $i++) {
        echo "<tr>";

        echo "<td>";
        echo $filas[$i]['user_id'];
        echo "</td>";

        echo "<td>";
        echo $filas[$i]["user_Name"];
        echo "</td>";

        echo "<td>";
        echo $filas[$i]["user_Email"];
        echo "</td>";
        
        echo "<td>";
        echo $filas[$i]["user_Password"];
        echo "</td>";
     
        echo "<td>";
        echo $filas[$i]["user_State"];
        echo "</td>";

        echo "<td>";        
        echo $filas[$i]["user_time_updated"];
        echo "</td>";

        echo "<td>";
        echo $filas[$i]["user_time_created"];
        echo "</td>";
        
        echo "</tr>";
      }

      ?>
    </tbody>
  </table>
</body>

</html>
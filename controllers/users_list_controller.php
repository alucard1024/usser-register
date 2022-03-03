<?php
include "../db/conexion-db.php";
$sql = file_get_contents("../sql/users_list.sql");
$result = $conn->query($sql);

while ($fila = $result->fetch_assoc()) {
    $filas[] = $fila;
   
}
include "../views/users-list_vista.php";
$conn->close();
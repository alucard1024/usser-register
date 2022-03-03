<?php
include "../db/conexion-db.php";
$sql = file_get_contents("../sql/create-user.sql");
$result = $conn->query($sql);
$conn->close();
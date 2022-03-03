<?php
include "../db/conexion-db.php";
$sql = file_get_contents("../sql/create-table-users.sql");
$result = $conn->multi_query($sql);
$conn->close();
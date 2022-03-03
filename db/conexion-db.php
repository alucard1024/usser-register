<?php
include "datos-conexion.php";
$conn = new mysqli($servername, $username, $passwoord, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 
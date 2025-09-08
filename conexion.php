<?php
$servername = "fdb1034.awardspace.net";  
$username = "4667282_votacionespagina";
$password = "tn9mDRYxtEeSKG!";
$dbname = "4667282_votacionespagina";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>

<?php
include "conexion.php";

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$area = $_POST['piso'];

// Insertar en la tabla
$sql = "INSERT INTO visitantes (nombre, area, organizacion) 
        VALUES ('$nombre', '$area', '$empresa')";

if ($conn->query($sql) === TRUE) {
    // Redirigir a pase.html con los datos
    header("Location: pase.html?tipo=visitante&nombre=" . urlencode($nombre));
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

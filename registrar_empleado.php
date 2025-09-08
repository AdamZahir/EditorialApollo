<?php
include "conexion.php";

// Recibir datos del formulario
$id_empleado = $_POST['id_empleado'];
$nombre = $_POST['nombre'];
$area = $_POST['area'];

// Insertar en la tabla
$sql = "INSERT INTO empleados (id_empleado, nombre, departamento) 
        VALUES ('$id_empleado', '$nombre', '$area')";

if ($conn->query($sql) === TRUE) {
    // Redirigir a pase.html con los datos
    header("Location: pase.html?tipo=empleado&nombre=" . urlencode($nombre) . "&area=" . urlencode($area));
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

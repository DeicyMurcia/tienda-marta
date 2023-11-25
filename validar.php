<?php
include 'Conexion.php';

//Obtener datos del formulario

$Nombre = $_POST["Nombre"];
$Autor = $_POST ["Autor"];
$Precio = $_POST ["Precio"];
$Disponible = $_POST ["Disponible"];

// Insertar datos en la base de datos
$sql = "INSERT INTO libreria (Nombre,Autor,Precio,Disponible) VALUES ('$Nombre', '$Autor', '$Precio', '$Disponible')";

if ( $conn->query($sql) === TRUE) {
    header("Location: Mostrar.php");

}else{
    echo "Error:" . $sql .  $conn->error;
}

$conn->close();
?>
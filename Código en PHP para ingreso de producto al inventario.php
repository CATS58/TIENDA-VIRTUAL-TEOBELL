<?php

// Definimos las variables para la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda_virtual TEOBELL";

// Creamos una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobamos si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Recibimos los datos del formulario de ingreso de producto
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];

// Creamos una consulta SQL para insertar el producto en la tabla de inventario
$sql = "INSERT INTO inventario (nombre, precio, cantidad) VALUES ('$nombre', '$precio', '$cantidad')";

// Ejecutamos la consulta
if ($conn->query($sql) === TRUE) {
    echo "El producto se ingresó en el inventario correctamente";
} else {
    echo "Error al ingresar el producto: " . $conn->error;
}

// Cerramos la conexión a la base de datos
$conn->close();

?>
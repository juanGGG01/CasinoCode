<?php
// Configura las credenciales de conexión
$servidor = "DLL-XXLL"; // o la IP del servidor
$usuario = "root"; // tu usuario de MySQL
$contrasena = "root"; // tu contraseña de MySQL
$baseDeDatos = "garito_casino"; // nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servidor, $usuario, $contrasena, $baseDeDatos);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener el nombre desde el formulario
    $nombre = $_POST['nombre'];

    // Inserción de datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre) VALUES ('$nombre')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos guardados correctamente.";
    } else {
        echo "Error al insertar los datos: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
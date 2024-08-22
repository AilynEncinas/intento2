<?php
// Configuración de la base de datos
$servername = "154.12.254.242";  // Ejemplo: "localhost"
$username = "ratiosof74bo_uv_bd_user";
$password = "Estudiantes@2024";
$dbname = "ratiosof74bo_uv_bd";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos enviados por POST
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

// Crear la consulta SQL para insertar los datos
$sql = "INSERT INTO gps_datos (latitud, longitud, fecha, hora) VALUES ('$lat', '$lng', '$fecha', '$hora')";

// Ejecutar la consulta y verificar si fue exitosa
if ($conn->query($sql) === TRUE) {
    echo "Datos guardados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>

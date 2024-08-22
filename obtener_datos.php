<?php
// Configuración de la base de datos
$servername = "154.12.254.242";
$username = "ratiosof74bo_uv_bd_user";
$password = "Estudiantes@2024";
$dbname = "ratiosof74bo_uv_bd";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos de la tabla
$sql = "SELECT latitud, longitud FROM gps_datos";
$result = $conn->query($sql);

$datos = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $datos[] = $row;
    }
}

// Enviar los datos en formato JSON
echo json_encode($datos);

// Cerrar la conexión
$conn->close();
?>

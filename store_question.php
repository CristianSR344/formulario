<?php
// Configuración de la conexión a la base de datos PaaS
$servername = "tu-servidor-paas.mysql.database.azure.com";
$username = "labroot";
$password = "Welcome1234!";
$dbname = "preguntas";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Capturar el valor del formulario
$question = $_POST['question'];

// Insertar el dato en la base de datos
$sql = "INSERT INTO preguntas (pregunta) VALUES ('$question')";

if ($conn->query($sql) === TRUE) {
    echo "Pregunta almacenada exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>

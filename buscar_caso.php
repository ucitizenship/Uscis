<?php

// Archivo: conexion.php

$servername = "localhost";
$username = "root";
$password = "";
$database = "registro"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conexion = mysqli_connect($servername, $username, $password, $database);

// Verificar conexión
if (!$conexion) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}
?>

<?php
// Incluye el archivo de conexión
include("conexion.php");

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén el código de caso del formulario
    $codigo_caso = mysqli_real_escape_string($conexion, $_POST['codigo_caso']);

    // Consulta SQL para buscar el caso por su código en la tabla "portafolio"
    $sql = "SELECT identify, nombre, codigo_caso, fecha, portafolio FROM portafolio WHERE codigo_caso = '$codigo_caso'";
    $resultado = mysqli_query($conexion, $sql);

    // Verifica si hay resultados
    if ($resultado && mysqli_num_rows($resultado) > 0) {
        // Redirecciona a la página de resultados con los datos en la URL
        header("Location: resultado.php?codigo_caso=$codigo_caso");
        exit();
    } else {
        // No se encontraron resultados, redirecciona a la página principal con un mensaje de error
        header("Location: case.php?error=no_results");
        exit();
    }
} else {
    // Si no se envió el formulario correctamente, redirecciona a la página principal
    header("Location: case.php");
    exit();
}
?>
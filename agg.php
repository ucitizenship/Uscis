<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.svg">
    <title>Profile</title>
    <link rel="stylesheet" href="agg.css">
</head>


<body>


    <header>
        <div class="container-header">
            <img src="img/USFlag-Icon-2x (1).png" alt="Imagen">
            <h1>
              An official website of the United States government
              <a href="#" class="dropdown-toggle">Here's how you know &#9662;</a>
              <ul class="dropdown-menu">
                <li>
                  <img src="img/candado.svg" alt="Submenú Item 1">
                  <a href="#">Official websites use .gov
                    A .gov website belongs to an official government organization in the United States.</a>
                </li>
                <li>
                  <img src="img/casa.svg" alt="Submenú Item 2">
                  <a href="#">Secure .gov websites use HTTPS
                    <span aria-hidden="true">(&#128274;)</span>
                    A lock or https:// means you've safely connected to the .gov website. Share sensitive information only on official, secure websites.</a>
                </li>
              </ul>
            </h1>
          </div>
    </header>

    <div class="Hamburguesa">
    <div class="log">
        <img src="img/USCIS_logo_English.svg.png" alt="Logo">
    </div>
    <ul class="links">
        <li><a href="http://localhost:3000/home.php#no-back-button">Home</a></li>
        <li><a href="#">Sign Out</a></li>
    </ul>
</div>




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
    // Obtén el número de identificación del formulario
    $identificacion = mysqli_real_escape_string($conexion, $_POST['Identificacion']);

    // Consulta SQL para buscar el usuario por su número de identificación
    $sql = "SELECT fecha, nombre, nacionalidad, caso, nacimiento, id_number, estado, fotografia FROM clientes WHERE id_number = '$identificacion'";
    $resultado = mysqli_query($conexion, $sql);

    // Verifica si hay resultados
    if ($resultado && mysqli_num_rows($resultado) > 0) {
        echo "<div class='profile-container'>";
        echo "<h2 class='profile-title'>Perfil de Usuario</h2>";
        // Muestra los datos del usuario
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<p class='profile-item'><strong>DATE:</strong> " . $fila['fecha'] . "</p>";
            echo "<p class='profile-item'><strong>NAME:</strong> " . $fila['nombre'] . "</p>";
            echo "<p class='profile-item'><strong>NATIONALITY:</strong> " . $fila['nacionalidad'] . "</p>";
            echo "<p class='profile-item'><strong>CASE:</strong> " . $fila['caso'] . "</p>";
            echo "<p class='profile-item'><strong>BIRTH:</strong> " . $fila['nacimiento'] . "</p>";
            echo "<p class='profile-item'><strong>ID NUMBER:</strong> " . $fila['id_number'] . "</p>";
            echo "<p class='profile-item'><strong>STATUS:</strong> " . $fila['estado'] . "</p>";
            
            // Muestra la fotografía del usuario si está disponible
            if (!empty($fila['fotografia'])) {
                // Concatena la ruta del directorio "uploads" con la ruta de la imagen
                $rutaImagen = "uploads/" . $fila['fotografia'];
                echo "<img src='" . $rutaImagen . "' alt='User Photo' class='profile-photo'>";
               
            }
        }
        echo "</div>";
    } else {
        echo "<p class='no-results'>No se encontraron resultados para el número de identificación proporcionado.</p>";
    }

    // Cierra la conexión
    mysqli_close($conexion);
} 
?>

<div class="footer">

<a href="http://127.0.0.1:5500/Homee.html#"><img src="img/USCIS_logo_English.svg.png" alt="icon0"></a>

<div class="redes-sociales">

    <a href="https://www.facebook.com/uscis"><img
            src="img/facebook-ba43db885f5e60da6da332a97d72aac102dbbf632d2ec2af29c627edebc064c0.svg"
            alt="facebook">
    </a>

    <a href="https://twitter.com/uscis"><img src="img/twitter.png" alt="twitter"></a>
    <a href="https://www.youtube.com/uscis"><img src="img/youtube.png" alt="youtube"></a>
    <a href="https://www.instagram.com/uscis"><img src="img/instagram.png" alt="instagram"></a>
    <a href="https://www.linkedin.com/company/uscis"><img src="img/linkedin.png" alt="linkedin"></a>
</div>

</div>

</body>
</html>
    
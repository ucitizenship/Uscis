<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Metaetiqueta para el ajuste al tamaño de pantalla -->
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <title>Ver documentos</title>
    <link rel="icon" href="img/logo.svg">
    <link rel="stylesheet" href="ver.css">
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
              A lock or https:// means you've safely connected to the .gov website. Share sensitive information only on
              official, secure websites.</a>
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
        <li><a href="http://localhost:3000/admi.php">Home</a></li>
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
// ver_documentos.php

// Incluye el archivo de conexión
include("conexion.php");

// Verifica que se recibió el parámetro identify
if (!isset($_GET["identify"])) {
    die("No se especificó el usuario.");
}
$identify = $_GET["identify"];

// Consulta SQL para seleccionar los documentos del usuario
$sql = "SELECT ruta, fecha FROM documentos WHERE identify = '$identify'";
$resultado = mysqli_query($conexion, $sql);

// Verifica si hay resultados
if ($resultado && mysqli_num_rows($resultado) > 0) {
    echo "<h3>Documentos de $identify</h3>";
    echo "<ul>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<li><a href='" . $fila['ruta'] . "' target='_blank'>" . basename($fila['ruta']) . "</a> - " . $fila['fecha'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No se encontraron documentos para este usuario.";
}

// Cierra la conexión
mysqli_close($conexion);
?>

<div class="editar-tabla">
<a href="http://localhost:3000/a%C3%B1adir.php">Atrás</a>
</div>




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
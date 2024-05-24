<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Metaetiqueta para el ajuste al tamaño de pantalla -->
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <title>Check </title>
    <link rel="icon" href="img/logo.svg">
    <link rel="stylesheet" href="all.css">
</head>
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
include("conexion.php");

// Verifica si se ha enviado el código de caso en la URL
if (isset($_GET['codigo_caso'])) {
    // Verifica si la conexión está establecida antes de usarla
    if (!$conexion) {
        // Si la conexión no está establecida, muestra un mensaje de error y detiene la ejecución
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Escapa el código de caso para prevenir inyección SQL
    $codigo_caso = mysqli_real_escape_string($conexion, $_GET['codigo_caso']);

    // Consulta SQL para obtener los datos del caso
    $sql = "SELECT identify, nombre, codigo_caso, fecha  FROM portafolio WHERE codigo_caso = '$codigo_caso'";
    $resultado = mysqli_query($conexion, $sql);

    // Verifica si hay resultados
    if ($resultado && mysqli_num_rows($resultado) > 0) {
        echo "<table>";
        echo "<tr>
        <th>Identify</th>
        <th>Nombre</th>
        <th>Codigo Caso</th>
        <th>Fecha</th>
        <th>Ver</th>

        </tr>";
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila['identify'] . "</td>";
            echo "<td>" . $fila['nombre'] . "</td>";
            echo "<td>" . $fila['codigo_caso'] . "</td>";
            echo "<td>" . $fila['fecha'] . "</td>";
            echo "<td><a href='?identify=" . $fila['identify'] . "'>Ver Documentos</a></td>";
            echo "</tr>";
           
        }
        echo "</table>";
    } else {
        echo "<p>No se encontraron resultados para el código de caso: $codigo_caso</p>";
    }
} else {
    echo "<p>No se proporcionó ningún código de caso.</p>";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Metaetiqueta para el ajuste al tamaño de pantalla -->
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <title>ADD A CASE</title>
    <link rel="icon" href="img/logo.svg">
    <link rel="stylesheet" href="añadir.css">
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
// Incluye el archivo de conexión
include("conexion.php");

// Paginación
$por_pagina = 10;
if (isset($_GET["otra_pagina"])) {
    $pagina = $_GET["otra_pagina"];
} else {
    $pagina = 1;
}
$empezar_desde = ($pagina-1) * $por_pagina;

// Consulta SQL para seleccionar los registros de la tabla 'portafolio' paginados y clasificados
$sql = "SELECT fecha, identify, nombre, codigo_caso, portafolio FROM portafolio ORDER BY fecha, identify, nombre, codigo_caso, portafolio LIMIT $empezar_desde, $por_pagina";

// Ejecuta la consulta
$resultado = mysqli_query($conexion, $sql);

// Verifica si hay resultados
if ($resultado && mysqli_num_rows($resultado) > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Date</th>";
    echo "<th>Identify</th>";
    echo "<th>Name</th>";
    echo "<th>Codigo Caso</th>";
    echo "<th>Añadir</th>";
    echo "<th>Ver</th>";
    echo "</tr>";
    // Itera sobre cada fila de resultados
    while ($fila = mysqli_fetch_assoc($resultado)) {
        // Imprime la información de cada fila en HTML en una fila de la tabla
        echo "<tr>";
        echo "<td>" . $fila['fecha'] . "</td>";
        echo "<td>" . $fila['identify'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['codigo_caso'] . "</td>";
        echo "<td><a href='subir_documentos.php?identify=" . $fila['identify'] . "'>Añadir Documentos</a></td>";
        echo "<td><a href='ver_documentos.php?identify=" . $fila['identify'] . "'>Ver Documentos</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Paginación
$sql_total = "SELECT COUNT(*) as total_filas FROM portafolio";
$resultado_total = mysqli_query($conexion, $sql_total);
$row_total = mysqli_fetch_assoc($resultado_total);
$total_filas = $row_total['total_filas'];
$total_paginas = ceil($total_filas / $por_pagina);

echo "<div class='pagination'>";
for ($i=1; $i<=$total_paginas; $i++) {
    if ($i == $pagina) {
        echo "<a class='active' href='#'>" . $i . "</a>";
    } else {
        echo "<a href='añadir.php?otra_pagina=" . $i . "'>" . $i . "</a>";
    }
}
echo "</div>";

// Cierra la conexión
mysqli_close($conexion);
?>

<div class="caso" >
    <a href="http://localhost:3000/caso.php">Add case</a>

</div>
<div class="editar-tabla">
<a href="http://localhost:3000/eliminar.php">Delete case</a>
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


</body>
</html>


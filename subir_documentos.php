<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.svg">
    <title>subir documentos</title>
    <link rel="stylesheet" href="up.css">
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
// Incluye el archivo de conexión
include("conexion.php");

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["documento"])) {
    $identify = $_POST["identify"];
    $documento = $_FILES["documento"];

    // Ruta donde se guardará el documento
    $directorio = "uploads/";
    if (!is_dir($directorio)) {
        mkdir($directorio, 0755, true);
    }
    $ruta_archivo = $directorio . basename($documento["name"]);

    // Verifica que el archivo es un PDF
    $tipo_archivo = strtolower(pathinfo($ruta_archivo, PATHINFO_EXTENSION));
    if ($tipo_archivo != "pdf") {
        echo "Solo se permiten archivos PDF.";
    } else {
        // Intenta subir el archivo
        if (move_uploaded_file($documento["tmp_name"], $ruta_archivo)) {
            // Guarda la ruta del archivo en la base de datos
            $sql = "INSERT INTO documentos (identify, ruta) VALUES ('$identify', '$ruta_archivo')";
            if (mysqli_query($conexion, $sql)) {
                echo "El archivo ha sido subido exitosamente.";
            } else {
                echo "Error al guardar la ruta del archivo en la base de datos: " . mysqli_error($conexion);
            }
        } else {
            echo "Hubo un error al subir el archivo.";
        }
    }
} else {
    // Verifica que se recibió el parámetro identify
    if (isset($_GET["identify"])) {
        $identify = $_GET["identify"];
    } else {
        die("No se especificó el usuario.");
    }
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



<body>
    <div class="panel">
    <h2>Subir Documentos para el Usuario: <?php echo htmlspecialchars($identify); ?></h2>
    <form action="subir_documentos.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="identify" value="<?php echo htmlspecialchars($identify); ?>">
        <label for="documento">Seleccionar documento PDF:</label>
        <input type="file" name="documento"  id="documento" accept="application/pdf" required>
        <button class="up" type="submit">Subir Documento</button>
        <div class="editar-tabla">
<a href="http://localhost:3000/a%C3%B1adir.php">Atrás</a>
</div>

    </form>
    </div>
    

</body>
</html>
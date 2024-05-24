<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD CASE</title>
    <link rel="icon" href="img/logo.svg">
    <link rel="stylesheet" href="casoss.css">
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

<div class="editar-tabla">
<a href="http://localhost:3000/a%C3%B1adir.php">ver caso</a>
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

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $identify = $_POST["identify"];
    $name = $_POST["name"];
    $fecha = $_POST["fecha"]; // Se corrigió aquí, se estaba asignando nuevamente el valor de $_POST["name"] a $name, debería ser $_POST["fecha"]

    // Genera el código aleatorio
    $codigo = generarCodigo();

    // Inserta los datos en la base de datos
    $sql = "INSERT INTO portafolio (identify, nombre, codigo_caso, fecha) VALUES ('$identify', '$name', '$codigo', '$fecha')"; // Se corrigió aquí, faltaba una coma entre '$codigo' y '$fecha'
    if (mysqli_query($conexion, $sql)) {
        // Muestra el mensaje de confirmación con el código generado
        echo "<div class='mensaje'>Registro exitoso. Tu código es: $codigo</div>";
    } else {
        echo "Error al registrar los datos: " . mysqli_error($conexion);
    }

    // Cierra la conexión
    mysqli_close($conexion);
}


// Función para generar el código aleatorio
function generarCodigo() {
    $letras = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numeros = "0123456789";

    // Genera 3 letras aleatorias
    $letrasAleatorias = "";
    for ($i = 0; $i < 3; $i++) {
        $letrasAleatorias .= $letras[rand(0, strlen($letras) - 1)];
    }

    // Genera 11 números aleatorios
    $numerosAleatorios = "";
    for ($i = 0; $i < 11; $i++) {
        $numerosAleatorios .= $numeros[rand(0, strlen($numeros) - 1)];
    }

    // Concatena las letras y los números
    $codigo = $letrasAleatorias . $numerosAleatorios;

    return $codigo;
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





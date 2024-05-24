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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.svg">
    <title>Registro</title>
    <link rel="stylesheet" href="register.css">
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


  <form method="post" action="registrar.php">
        <div class="main-header-bar">
            <div class="uscis-panel-header">
                <div class="uscis-row">
                    <div class="col-span-6 uscis-logo-small-width">
                        <a href="/"><img alt="USCIS Logo" src="img/USCIS_Logo-2x.png"></a>
                    </div>
                </div>
            </div>
        </div>

        <p>Your USCIS account is only for you. Do not create a shared account with family or friends. Individual accounts allow us to best serve you and protect your personal information.
            You must provide your own email address below if you are the one who is filing a form online, submitting an online request, or tracking a case.</p>
        <h2>Sign Up</h2>
        <hr>

        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre" required>  
        </div>

        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email" required>  
        </div>

        <div class="input-wrapper">
            <input type="text" name="direction" placeholder="País de origen" required>  
        </div>

        <div class="input-wrapper">
            <input type="text" name="phone" placeholder="Telefono" required>  
        </div>

        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña" required>  
        </div>
        
        <label for="cargo">Selecciona un cargo:</label>
        <select name="cargo" id="cargo">
           <option value="1"> Administrador</option>
           <option value="2"> usuario</option>
        </select>

       

        <input class="btn" type="submit" name="Register" value="Sign Up">
        <hr>
        <h3>Already have an account? </h3> 
        <div class="Sign-In"><a href="http://localhost:3000/index.php">Sign In</a></div>
    </form>




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

<?php
  include("registrar.php");
?>

   


    
</body>
</html>
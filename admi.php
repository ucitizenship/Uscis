<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.svg">
    <title>Administrador</title>
    <link rel="stylesheet" href="admi.css">
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
        <div class="linea"></div> <!-- Separador vertical rojo después del logo -->
        <div class="menu-toggle">
            <h7>Menu</h7>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <ul class="links">
            <li><a href="http://localhost:3000/info.php">Add information</a></li>
            <li><a href="http://localhost:3000/a%C3%B1adir.php">Add a case</a></li>
            <li><a href="http://localhost:3000/alls.php">check all your clients</a></li>
            <br>
            <li><a href="cerrar_sesion.php">Sign Out</a></li>
        </ul>

    </div>
   <br>

    <div class="mar">

        <div class="mar-2">
          <h3>Welcome To Your ADMI USCIS Account</h3>
          <h4>Select What You Want To Do</h4>
        </div>

    </div>
    <br>
    

    <div class="selection">
        <a href="http://localhost:3000/info.php" class="select-1">
          <img src="img/carnet.png" alt="Imagen 1">
          <h5>Add information</h5>
          <p>Add information of your clients </p>
        </a>
        
        <a href="http://localhost:3000/añadir.php" class="select-2">
          <img src="img/carpeta.png" alt="Imagen 2">
          <h5>Add a Case</h5>
          <p>Add a new case</p>
        </a>
        
        <a href="http://localhost:3000/alls.php" class="select-3">
          <img src="img/hoja.png" alt="Imagen 3">
          <h5>Check all your clients</h5>
          <p>Review the information of all your clients</p>
        </a> 
       
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script> 
</body>
</html>
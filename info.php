<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.svg">
    <title>Registro</title>
    <link rel="stylesheet" href="info.css">
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

<form method="post" enctype="multipart/form-data">
    <div class="main-header-bar">
        <div class="uscis-panel-header">
            <div class="uscis-row">
                <div class="col-span-6 uscis-logo-small-width">
                    <a href="/"><img alt="USCIS Logo" src="img/USCIS_Logo-2x.png"></a>
                </div>
            </div>
        </div>
    </div>

    <p>Enter all the personal data of your client so that he can see all his personal information and his activity on the server</p>
    <h2>Register</h2>
    <hr>

    <div class="input-wrapper">
        <input type="text" name="name" placeholder="Name">  
    </div>

    <div class="input-wrapper">
        <input type="date" name="nacimiento" placeholder="Date of birth">  
    </div>

    <div class="input-wrapper">
        <input type="text" name="nacionalidad" placeholder="Nationality">  
    </div>

    <div class="input-wrapper">
        <input type="text" name="id_number" placeholder="ID Number">  
    </div>

    <h3>Tipo de Caso</h3>
    <div class="selection">
        <select class="tipo" name="caso" id="tipo_de_caso" >
            <option value="visa_h2b">Visa H2b</option>
            <option value="visa_h2a">Visa H2a</option>
            <option value="green_card">Green Card</option>
            <option value="pasaporte">Passport</option>
        </select>
    </div>

    <h3>Estado</h3>
    <div class="selection">
        <select class="tipo" name="estado" id="estado" >
            <option value="Inactive &#x1F534;"> Inactive</option>
            <option value="Active &#x1F7E2;"> Active</option>
            <option value="Pending &#x1F7E2;"> Pending</option>
        </select>
    </div>

    <div class="input-wrapper">
        <input type="file" name="fotografia" accept="image/*">  
    </div>

    <input class="btn" type="submit" name="register" value="Register">
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
  include("infor.php")
?>
   


    
</body>
</html>
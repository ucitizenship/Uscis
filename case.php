<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Metaetiqueta para el ajuste al tamaño de pantalla -->
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <title>Add a case</title>
    <link rel="icon" href="img/logo.svg">
    <link rel="stylesheet" href="case.css">
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
         <li><a href="http://localhost:3000/home.php">Home</a></li>
            <li><a href="http://localhost:3000/index.php">Sign Out</a></li>
        </ul>

    </div>

    <div class="panel-central">
        <h2>Add A Case To Your Account</h2>
        <p>You can add a case to your USCIS account to see your current status and case history online. Enter your receipt number below and we will add the case to your online account. We will notify you each time we take a new action on your case, and you will need to sign into your account to see your latest case status. You can manage these notifications in your account settings.</p>
        <h3>Enter your USCIS case receipt number</h3>
        <p>Your USCIS case receipt number can be found in the Receipt Notice or Account Notice that we sent you.</p>
        <form action="buscar_caso.php" method="post">
            <div class="añadir">
                <div class="input-wrapper">
                    <h4>Receipt number</h4> 
                    <input type="text" name="codigo_caso" placeholder="Add case">  
                </div>
                Example: ABC1234567890 or XYZ*987654321
                <input class="btn" type="submit" name="buscar" value="Search Case">
            </div>
        </form>
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
<?php

   $conex = mysqli_connect("localhost", "root", "", "registro" );


   if (!$conex) {
      die("La conexión falló: " . mysqli_connect_error());
  }
   
?>
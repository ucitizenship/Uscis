<?php

$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['email']=$email;

include('db.php');


$consulta="SELECT*FROM datos where email='$email' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);


$filas=mysqli_fetch_array($resultado);

if($filas ['id_cargo']== 2){//*admi
    header("location:home.php");

}else if ($filas ['id_cargo']== 1) {//*usuario
    header("location:admi.php");
    
}

else {
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
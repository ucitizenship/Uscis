<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        !empty($_POST['name']) &&
        !empty($_POST['nacimiento']) &&
        !empty($_POST['nacionalidad']) &&
        !empty($_POST['id_number']) &&
        !empty($_POST['caso']) &&
        !empty($_POST['estado']) &&
        isset($_FILES['fotografia'])
    ) {
        $name = trim($_POST['name']);
        $nacimiento = trim($_POST['nacimiento']);
        $nacionalidad = trim($_POST['nacionalidad']);
        $id_number = trim($_POST['id_number']);
        $caso = trim($_POST['caso']);
        $estado = trim($_POST['estado']);
        $fecha = date("d/m/y");

        // Manejo de la fotografía
        $fotoNombre = $_FILES['fotografia']['name'];
        $fotoTmpNombre = $_FILES['fotografia']['tmp_name'];
        $fotoError = $_FILES['fotografia']['error'];
        $fotoSize = $_FILES['fotografia']['size'];
        $fotoExt = strtolower(pathinfo($fotoNombre, PATHINFO_EXTENSION));
        $allowed = array('jpg', 'jpeg', 'png', 'gif');

        if (in_array($fotoExt, $allowed)) {
            if ($fotoError === 0) {
                if ($fotoSize < 5000000) { // Límite de 5MB
                    $fotoNuevoNombre = uniqid('', true) . "." . $fotoExt;
                    $fotoDestino = 'uploads/' . $fotoNuevoNombre;
                    if (move_uploaded_file($fotoTmpNombre, $fotoDestino)) {
                        // Consulta SQL incluyendo la fotografía
                        $consulta = "INSERT INTO clientes (nombre, nacimiento, nacionalidad, id_number, caso, estado, fecha, fotografia) 
                                     VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                        
                        if ($stmt = mysqli_prepare($conex, $consulta)) {
                            mysqli_stmt_bind_param($stmt, "ssssssss", $name, $nacimiento, $nacionalidad, $id_number, $caso, $estado, $fecha, $fotoNuevoNombre);
                            if (mysqli_stmt_execute($stmt)) {
                                echo '<h3 class="success">Tu registro se ha completado</h3>';
                            } else {
                                echo '<h3 class="error">Ocurrió un error al ejecutar la consulta</h3>';
                            }
                            mysqli_stmt_close($stmt);
                        } else {
                            echo '<h3 class="error">Ocurrió un error al preparar la consulta</h3>';
                        }
                    } else {
                        echo '<h3 class="error">Ocurrió un error al subir la fotografía</h3>';
                    }
                } else {
                    echo '<h3 class="error">La fotografía es demasiado grande</h3>';
                }
            } else {
                echo '<h3 class="error">Ocurrió un error al subir la fotografía</h3>';
            }
        } else {
            echo '<h3 class="error">Formato de archivo no permitido. Solo se permiten JPG, JPEG, PNG y GIF</h3>';
        }
    } else {
        echo '<h3 class="error">Por favor, completa todos los campos</h3>';
    }
}
?>
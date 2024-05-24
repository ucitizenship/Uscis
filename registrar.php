<?php
// Incluir archivo de conexión
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Register'])) {
    // Validar y sanitizar la entrada del usuario
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $direction = trim($_POST['direction']);
    $phone = trim($_POST['phone']);
    $password = trim($_POST['password']);
    $cargo = intval($_POST['cargo']);
    $fecha = date("Y-m-d");

    // Validar que todos los campos estén llenos
    if (!empty($name) && !empty($email) && !empty($direction) && !empty($phone) && !empty($password) && !empty($cargo)) {
        // Preparar la consulta SQL para insertar los datos
        $consulta = "INSERT INTO datos (nombre, email, direccion, telefono, contraseña, fecha, id_cargo) VALUES (?, ?, ?, ?, ?, ?, ?)";

        // Preparar la declaración
        if ($stmt = mysqli_prepare($conex, $consulta)) {
            // Vincular los parámetros
            mysqli_stmt_bind_param($stmt, "ssssssi", $name, $email, $direction, $phone, $password, $fecha, $cargo);

            // Ejecutar la declaración
            if (mysqli_stmt_execute($stmt)) {
                echo "<h3 class='success'>Tu registro se ha completado</h3>";
                echo " <a href=http://localhost:3000/index.php>sign in</a>";
            } else {
                echo "<h3 class='error'>Ocurrió un error al ejecutar la consulta</h3>";
            }

            // Cerrar la declaración
            mysqli_stmt_close($stmt);
        } else {
            echo "<h3 class='error'>Ocurrió un error al preparar la consulta</h3>";
        }
    } else {
        echo "<h3 class='error'>Por favor, completa todos los campos</h3>";
    }

    // Cerrar la conexión
    mysqli_close($conex);
}
?>
 

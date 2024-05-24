<?php
// Inicia la sesión
session_start();

// Destruye todas las variables de sesión
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cerrando sesión...</title>
<style>
/* Estilos para el cuadro de diálogo modal */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.5);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Cerrando sesión...</p>
  </div>
</div>

<?php
// Evitar que el navegador almacene en caché la página de inicio
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>

<?php
// Redirige al usuario a la página de inicio de sesión después de cerrar sesión
header("Location: Homee.html");
exit;
?>

</body>
</html>
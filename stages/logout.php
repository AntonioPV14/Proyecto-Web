<?php
// Inicia la sesión
session_start();

// Destruye todas las variables de sesión
$_SESSION = array();

// Finaliza la sesión
session_destroy();

// Redirige al usuario al inicio de sesión
header("Location: ../views/index.php");
exit();
?>

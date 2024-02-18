<?php

// Incluimos la clase UserSession
include_once 'login.php';
// Creamos una instancia de la clase UserSession
$userSession = new UserSession();

function cerrarSesion($userSession) {
    $userSession->closeSession(); // Cerramos la sesión utilizando la instancia de UserSession
    header('Location: ../views/index.php');
    exit;
}

// Check if the Close Session button was clicked
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Cerrar sesión"])) {
    cerrarSesion($userSession);
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Pragma: no-cache");
}
?>

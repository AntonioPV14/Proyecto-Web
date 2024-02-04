<?php
function cerrarSesion() {
    session_start();
    session_destroy();
    header('Location: ../views/index.php');
    exit;
}

// Check if the Close Session button was clicked
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Cerrar sesión"])) {
    cerrarSesion();
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Pragma: no-cache");
}
?>
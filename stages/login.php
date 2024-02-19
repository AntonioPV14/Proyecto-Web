<?php
// Incluye el archivo de conexión a la base de datos
include '../stages/db.php';

// Inicia la sesión
session_start();


// Verifica si ya hay una sesión activa
if (isset($_SESSION['user_id']) && $_SERVER['PHP_SELF'] != '../stages/logout.php') {
    // Si hay una sesión activa, redirige al usuario a la página de carga
    header("Location: ../views/Loading/loading.php?tiempo=2");
    exit();
}

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $email = $_POST['email_1'];
    $password = $_POST['password_1'];

    // Conecta a la base de datos
    $db = new DB();
    $pdo = $db->connect();

    // Consulta para verificar el usuario y contraseña
    $sql = "SELECT * FROM user WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch();

    // Verifica si se encontró un usuario con el email proporcionado y si la contraseña coincide
    if ($user && password_verify($password, $user['password'])) {
        // Inicia la sesión y almacena datos del usuario si es necesario
        $_SESSION['user_id'] = $user['id_usuario'];
        $_SESSION['user_email'] = $user['email'];

        // Redirige a la página de carga
        header("Location: ../views/Loading/loading.php?tiempo=2");
        exit();
    } else {
        // Muestra un mensaje de error si las credenciales son incorrectas
        $error_message = "Correo electrónico o contraseña incorrectos";
    }
}
?>

<?php
session_start();
require '../stages/database.php';

if (isset($_POST['email_1']) && isset($_POST['password_1'])) {
    $email = $_POST['email_1'];
    $password = $_POST['password_1'];

    $stmt = $conn->prepare('SELECT id_usuario, email, password FROM user WHERE email = :email');
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $user['password'])) {
            $_SESSION['usuario_id'] = $user['id_usuario'];
            header('Location: ../dashboard/index.php');
        } else {
            $message = "Contraseña incorrecta. Vuelve a intentarlo o selecciona '¿Has olvidado tu contraseña?' para cambiarla.";
        }
    }
}
?>
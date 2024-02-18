<?php
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
            
            header('Location: ../views/Loading/loading.php?tiempo=2');
            exit();
        } else {
            $message = "Contraseña incorrecta. Vuelve a intentarlo o selecciona '¿Has olvidado tu contraseña?' para cambiarla.";
        }
    }
}
?>

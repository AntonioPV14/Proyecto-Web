<!--Conexión con el registro-->
<?php
require '../stages/database.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica si se enviaron los campos necesarios desde el formulario de registro
    if (empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['email_2']) || empty($_POST['password_2'])) {
        $message = 'Por favor, complete todos los campos.';
    } else {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email_2'];
        $password = password_hash($_POST['password_2'], PASSWORD_BCRYPT);

        // Verifica si el correo electrónico ya existe en la base de datos
        $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user) {
            $message = 'El correo electrónico ya está registrado.';
        } else {
            // Realiza la inserción en la base de datos usando los datos proporcionados
            $sql = "INSERT INTO user (nombre, apellido, email, password) VALUES (:nombre, :apellido, :email, :password)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellido', $apellido);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);

            // Ejecuta la consulta preparada
            if ($stmt->execute()) {
                $message = 'Usuario creado satisfactoriamente';
            } else {
                $message = 'Error en la base de datos: ' . $stmt->errorInfo()[2];
            }
        }
    }
}
?>
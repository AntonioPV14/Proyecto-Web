<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'proyecto';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
    // PDO para mostrar errores
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar la conexión
    if (!$conn) {
        die("Conexión a la base de datos fallida");
    }
} catch (PDOException $e) {
    die('Conexión fallida: ' . $e->getMessage());
}
?>

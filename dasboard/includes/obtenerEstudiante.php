<?php 

include '../../stages/database.php';
try {
    // Prepara la consulta SQL
    $stmt = $conn->prepare("SELECT * FROM alumnos");

    // Ejecuta la consulta
    $stmt->execute();

    // Obtiene los resultados
    $alumnos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Imprime los resultados como JSON
    echo json_encode($alumnos);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>



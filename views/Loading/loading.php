<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>EduWeb - Cargando</title>
</head>
<body>
<div class='loader'>
  <div class='loader_overlay'></div>
  <div class='loader_cogs'>
    <div class='loader_cogs__top'>
      <div class='top_part'></div>
      <div class='top_part'></div>
      <div class='top_part'></div>
      <div class='top_hole'></div>
    </div>
    <div class='loader_cogs__left'>
      <div class='left_part'></div>
      <div class='left_part'></div>
      <div class='left_part'></div>
      <div class='left_hole'></div>
    </div>
    <div class='loader_cogs__bottom'>
      <div class='bottom_part'></div>
      <div class='bottom_part'></div>
      <div class='bottom_part'></div>
      <div class='bottom_hole'><!-- lol --></div>
    </div>
    <p>EduWeb</p>
  </div>
  <h1>Cargando..</h1>
  <h2>Tu entorno virtual...</h2>
</div>

<script>
    // Obtener el tiempo de espera del parámetro GET
    <?php
    if(isset($_GET['tiempo'])) {
        $tiempo = $_GET['tiempo'];
    ?>
    // Esperar el tiempo especificado antes de redireccionar
    setTimeout(function() {
        window.location.href = "../../dasboard/index.php"; // Redireccionar después del tiempo especificado
    }, <?php echo $tiempo * 1000; ?>); // Convertir segundos a milisegundos
    <?php
    } else {
    ?>
    // Si no se recibe el parámetro de tiempo, redirigir inmediatamente
    window.location.href = "../../dasboard/index.php";
    <?php
    }
    ?>
</script>

</body>
</html>

<?php include '../stages/singup.php'; // Ruta Para registrar usuario?>
<?php include '../stages/login.php'; // Ruta Para registrar usuario?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style_index.css">
    <title>EduWeb</title>
</head>
<body>
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <img src="../img/EduWeb1.jpg" alt="Logo de EduWeb" class="logo-img">
            <p>EduWeb</p>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="#" class="link active">Inicio</a></li>
                <li><a href="#" class="link">Blog</a></li>
                <li><a href="#" class="link">Servicios</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Iniciar sesión</button>
            <button class="btn" id="registerBtn" onclick="register()">Registrar</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>
<!----------------------------- Formularios ----------------------------------->    
    <div class="form-box">
        <!------------------- Formulario de Iniciar sesión -------------------------->
        <div class="login-container" id="login">

            <form action="" method="post">
            <div class="top">
                <span>¿No tienes una cuenta? <a href="#" onclick="register()">Regístrate</a></span>
                <header>Iniciar sesión</header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="email_1" placeholder="Usuario o Correo electronico">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name = "password_1"placeholder="Contraseña">
                <i class="bx bx-lock-alt"></i>
            </div>
            
            <div class="input-box">
                <input type="submit"  class="submit" value="Siguiente">
            </div>
            </form>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Recuerdame</label>
                </div>
                <div class="two">
                    <label id="Termino"><a href="#">¿Olvido su contraseña?</a></label>
                </div>
            </div>
        </div>

        <!------------------- Formulario de Registro -------------------------->
<div class="register-container" id="register">
    <?php
        if (!empty($message)):  ?>
         <script>
            alert("<?php echo $message; ?>");
         </script>
    <?php endif; ?>
    <div class="top">
        <span>¿Tienes una cuenta? <a href="#" onclick="login()">Iniciar sesión</a></span>
        <header>Regístrate</header>
    </div>
    <form action="index.php" method="post">
        <div class="two-forms">
            <div class="input-box">
                <input type="text" class="input-field" name="nombre" placeholder="Nombre">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="apellido" placeholder="Apellido">
                <i class="bx bx-user"></i>
            </div>
        </div>
        <div class="input-box">
            <input type="text" class="input-field" name="email_2" placeholder="Correo">
            <i class="bx bx-envelope"></i>
        </div>
        <div class="input-box">
            <input type="password" class="input-field" name="password_2" placeholder="Contraseña">
            <i class="bx bx-lock-alt"></i>
        </div>
        <div class="input-box">
            <input type="submit" class="submit" value="Registrar">
        </div>
    </form>
    <div class="two-col">
        <div class="one">
            <input type="checkbox" id="register-check">
            <label for="register-check"> Recuérdame</label>
        </div>
        <div class="two">
            <label id="Termino"><a href="#">Términos y condiciones</a></label>
        </div>
    </div>
</div>


<!--js-->   
<script>
   
   function myMenuFunction() {
    var i = document.getElementById("navMenu");
    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }
 
</script>
<script>
    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }
    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }

</script>
</body>
</html>
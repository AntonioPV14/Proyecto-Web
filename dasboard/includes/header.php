<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>cms dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/custom.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/file-document.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css' rel='stylesheet'>
    <link href='https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap4.css' rel='stylesheet'>
</head>
<body>
<div class="wrapper">
    <div class="body-overlay"></div>
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3><img src="../img/EduWeb1.jpg" class="img-fluid"/><span>EduWeb</span></h3>
        </div>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#" class="dashboard"><i class="material-icons">home</i><span>Inicio</span></a>
            </li>

            <li class="dropdown">
                <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="material-icons">group</i><span>Estudiantes</span></a>
                <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                    <li>
                        <a href="../dasboard/estudiantes.php">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="material-icons">work</i><span>Docentes</span></a>
                <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>

          
            <li class="">
                <a href="#"><i class="material-icons">analytics</i><span>Materias</span></a>
            </li>
            <li class="">
                <a href="#"><i class="material-icons">analytics</i><span>Grados</span></a>
            </li>
            <li class="">
                <a href="#"><i class="material-icons">analytics</i><span>Periodos</span></a>
            </li>
            <li class="">
                <a href="#"><i class="material-icons">analytics</i><span>Aulas</span></a>
            </li>
            <li class="">
                <a href="#"><i class="material-icons">analytics</i><span>Procesar Grados</span></a>
            </li>
            <li class="">
                <a href="#"><i class="material-icons">analytics</i><span>Procesar Alumnos</span></a>
            </li>
            <li class="">
                <a href="#"><i class="material-icons">description</i><span>Reportes</span></a>
            </li>

        </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content">
        <div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        <span class="material-icons">arrow_back_ios</span>
                    </button>
                    <a class="navbar-brand" href="#"> Administración </a>
                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>
                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="dropdown nav-item ">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <span class="material-icons">settings</span>
                                    
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Perfil</a>
                                    </li>
                                    <li>
                                        <a href="./../views/index.php">Cerrar Sesión</a>
                                    </li>
                                </ul>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="main-content">
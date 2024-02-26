<?php include 'includes/header.php'; ?>
<?php include 'includes/modals/modalsEstudiante.php'; ?>
<?php include 'includes/modals/modalsEliminarEstudiante.php'; ?>   
<link rel="stylesheet" href="css/stilo.css">
<!-- Contenido de la página principal -->
<h1>Estudiantes</h1>
<div class="content">
    <button id="btnNewStudent" type="button" onclick="openModal()"><i class="fas fa-user-plus"></i> Nuevo Estudiante</button>


    <button id="btnExportPDF"><i class="bi bi-file-earmark-pdf-fill"></i> Exportar a PDF</button>
    <button id="btnExportExcel"><i class="bi bi-file-excel"></i> Exportar a Excel</button>
    <button id="btnPrint"><i class="bi bi-printer"></i></button>

    <!--Custom js-->
    <script src="js/main.js"></script>

    <div class="container my-4">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table id="datatable_users" class="table table-striped">
                        <caption>
                            Tabla de Estudiantes.
                        </caption>
                        <thead>
                            <tr>
                                <th class="centered">#</th>
                                <th class="centered">Nombre</th>
                                <th class="centered">Edad</th>
                                <th class="centered">Dirección</th>
                                <th class="centered">Cédula</th>
                                <th class="centered">Telefono</th>
                                <th class="centered">Correo</th>
                                <th class="centered">Estado</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody_users"></tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>

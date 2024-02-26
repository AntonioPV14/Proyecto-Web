<?php include 'includes/header.php'; ?>
<?php include 'includes/modals/modalsDocentes.php'; ?> 
<?php include 'includes/modals/modalsEliminarDocentes.php'; ?> 
<link rel="stylesheet" href="css/stilo.css"> 
<!-- Contenido de la página principal -->
<h1>Docentes</h1>
<div class="content">
<button id="btnNewStudent" type="button" onclick="openModal()"><i class="fas fa-user-plus"></i> Nuevo Docente</button>
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
                                <th class="centered">Name</th>
                                <th class="centered">Email</th>
                                <th class="centered">City</th>
                                <th class="centered">Company</th>
                                <th class="centered">Status</th>
                                <th class="centered">Options</th>
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

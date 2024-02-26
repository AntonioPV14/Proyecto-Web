<?php include 'includes/header.php'; ?>
<?php include 'includes/modals/modalsEstudiante.php'; ?>
<?php include 'includes/modals/modalsEliminarEstudiante.php'; ?>   
<link rel="stylesheet" href="css/stilo.css">
<!-- Agrega estas líneas en tu archivo HTML -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<!-- Contenido de la página principal -->
<h1>Estudiantes</h1>
<div class="content">
    <button id="btnNewStudent" type="button" onclick="openModal()"><i class="fas fa-user-plus"></i> Nuevo Estudiante</button>
    <button id="btnExportPDF"><i class="bi bi-file-earmark-pdf-fill"></i> Exportar a PDF</button>

    <script>
    document.getElementById('btnExportPDF').addEventListener('click', function() {
        exportarPDF();
    });

    function exportarPDF() {
        const doc = new jsPDF();
        doc.autoTable({ html: '#datatable_users' });
        doc.save('tabla_estudiantes.pdf');
    }
    </script>

    <button id="btnExportExcel"><i class="bi bi-file-excel"></i> Exportar a Excel</button>
    <button id="btnPrint"><i class="bi bi-printer"></i></button>

    <div class="container my-4">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="table-responsive"> <!-- Agrega esta clase para hacer la tabla responsive -->
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
                                <th class="centered">fecha_nac</th>
                                <th class="centered">fecha_registro</th>
                                <th class="centered">Estado</th>
                                <th class="centered"></th> <!-- Columna vacía para los botones -->
                            </tr>
                        </thead>
                        <tbody id="tableBody_users"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Custom js-->
<script src="js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>


<?php include 'includes/footer.php'; ?>

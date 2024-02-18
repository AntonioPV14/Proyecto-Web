<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; 2024 EduWeb. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

<!-- Include jQuery (full version) -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

<!-- Include Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Include Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Include DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script src="./js/funtionEstudiantes.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        // Inicializar el DataTable
        var table = $('#example').DataTable();

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $('#content').toggleClass('active');
        });

        $('.more-button,.body-overlay').on('click', function () {
            $('#sidebar,.body-overlay').toggleClass('show-nav');
        });

        // Función para cambiar los textos a español
        function cambiarTextos() {
            // Modificar el texto "Previous" por "Anterior"
            $('#example_paginate .pagination .page-item.previous .page-link').text('Anterior');

            // Modificar el texto "Next" por "Siguiente"
            $('#example_paginate .pagination .page-item.next .page-link').text('Siguiente');
        }

        // Llamar a la función al cargar la página
        cambiarTextos();

        // Evento que se dispara al cambiar de página en el DataTable
        $('#example').on('page.dt', function () {
            cambiarTextos(); // Llamar a la función para cambiar los textos a español
        });

        // Evento que se dispara después de que el DataTable ha sido dibujado
        table.on('draw.dt', function () {
            cambiarTextos(); // Llamar a la función para cambiar los textos a español después de dibujar el DataTable
        });
    });
</script>


</body>
</html>

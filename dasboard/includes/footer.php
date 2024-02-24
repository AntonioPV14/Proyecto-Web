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

<!--Custom js-->
<script src="../js/main.js"></script>

<!-- Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

<!-- Include jQuery (full version) -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

<!-- Include Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Include Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Include DataTables JS -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
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


    });
</script>


</body>
</html>

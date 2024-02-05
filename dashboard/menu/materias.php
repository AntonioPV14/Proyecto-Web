<!--Cabecera-->
<?php require '../views/head.php'; ?>
<div class="estudent text-center mt-5 fade-in animation-duration-3">
    <h1>Asignaturas</h1>
    <div class="marco">
        <div class="container">
            <table class="table table-bordered table-hover mt-4 table-responsive">
                <thead class="table-dark table-header">
                    <tr>
                        <th class="table-cell">ID</th>
                        <th class="table-cell">Nombre</th>
                        <th class="table-cell">Apellido</th>
                        <th class="table-cell">Fecha de nacimiento</th>
                        <th class="table-cell">Teléfono</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    <tr>
                        <td class="table-cell">1</td>
                        <td class="table-cell">Nombre1</td>
                        <td class="table-cell">Apellido1</td>
                        <td class="table-cell">2024</td>
                        <td class="table-cell">123456789</td>
                        <td class="table-cell text-right">
                        <button type="button" class="btn btn-danger mr-2">Eliminar</button>
                        <button type="button" class="btn btn-primary mr-2">Editar</button>
                        <button type="button" class="btn btn-success">Crear</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-cell">2</td>
                        <td class="table-cell">Nombre2</td>
                        <td class="table-cell">Apellido2</td>
                        <td class="table-cell">2024</td>
                        <td class="table-cell">987654321</td>
                    </tr>
                    <!-- Agrega más filas según tus necesidades -->
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--Pie-->
<?php include '../views/footer.php'; ?>
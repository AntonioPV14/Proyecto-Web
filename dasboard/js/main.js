let dataTable;
let dataTableIsInitialized = false;

const dataTableOptions = {
    lengthMenu: [5, 10, 15, 20, 100, 200, 500],
    columnDefs: [
        { className: "centered", targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9] },
        { orderable: false, targets: [9] },
        { searchable: true, targets: [1, 2, 3, 4, 5, 6, 7, 8] }
    ],
    pageLength: 5,
    destroy: true,
    language: {
        lengthMenu: "Mostrar _MENU_ registros por página",
        zeroRecords: "Ningún estudiante encontrado",
        info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ estudiantes",
        infoEmpty: "Ningún estudiante encontrado",
        infoFiltered: "(filtrados desde _MAX_ registros totales)",
        search: "Buscar:",
        loadingRecords: "Cargando...",
        paginate: {
            first: "Primero",
            last: "Último",
            next: "Siguiente",
            previous: "Anterior"
        }
    }
};

const openModal = () => {

    $('#modalEstudiante').modal('show');
};

const openModal2 = () => {

    $('#exampleModal').modal('show');
};

const initDataTable = async() => {
    if (dataTableIsInitialized) {
        dataTable.destroy();
    }

    await listUsers();

    dataTable = $("#datatable_users").DataTable(dataTableOptions);

    dataTableIsInitialized = true;
};

const listUsers = async() => {
    try {
        const response = await fetch("/Proyecto/dasboard/includes/obtenerEstudiante.php");
        const alumnos = await response.json();

        let content = ``;
        alumnos.forEach((alumno, index) => {
            content += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${alumno.nombre_alumno}</td>
                    <td>${alumno.edad}</td>
                    <td>${alumno.direccion}</td>
                    <td>${alumno.cedula}</td>
                    <td>${alumno.telefono}</td>
                    <td>${alumno.correo}</td>
                    <td>${alumno.fecha_nac}</td>
                    <td>${alumno.fecha_registro}</td>
                    <td>${alumno.estado}</td>
                    <td>
                        <button class="btn btn-sm btn-primary" onclick="openModal()"><i class="fa-solid fa-pencil"></i></button>
                        <button class="btn btn-sm btn-danger" onclick="openModal2()"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>`;
        });
        $("#datatable_users tbody").html(content);


        if (dataTableIsInitialized) {
            dataTable.destroy();
        }

        dataTable = $("#datatable_users").DataTable(dataTableOptions);

        dataTableIsInitialized = true;
    } catch (ex) {
        alert(ex);
    }
};

window.addEventListener("load", async() => {
    await initDataTable();
});
let dataTable;
let dataTableIsInitialized = false;

const dataTableOptions = {
    lengthMenu: [5, 10, 15, 20, 100, 200, 500],
    columnDefs: [
        { className: "centered", targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9] },
        { orderable: false, targets: [9] }, // Deshabilita la ordenación para la columna de botones
        { searchable: true, targets: [1, 2, 3, 4, 5, 6, 7, 8] } // Habilita la búsqueda en todas las columnas excepto la primera
    ],
    pageLength: 5, // Número predeterminado de registros por página
    destroy: true,
    language: {
        lengthMenu: "Mostrar _MENU_ registros por página",
        zeroRecords: "Ningún docente encontrado",
        info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ docentes",
        infoEmpty: "Ningún docente encontrado",
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
    // Abre el modal de edición, reemplaza '#modalsDocentes' con el ID de tu modal
    $('#modalDocentes').modal('show');
};

const openModal2 = () => {
    // Abre el modal de eliminación, reemplaza '#exampleModal' con el ID de tu modal
    $('#exampleModal2').modal('show');
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
        const response = await fetch("/Proyecto/dasboard/includes/obtenerDocente.php");
        const docentes = await response.json();

        let content = ``;
        docentes.forEach((docente, index) => {
            content += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${docente.nombre}</td>
                    <td>${docente.direccion}</td>
                    <td>${docente.cedula}</td>
                    <td>${docente.clave}</td>
                    <td>${docente.telefono}</td>
                    <td>${docente.correo}</td>
                    <td>${docente.nivel_est}</td>
                    <td>${docente.estado}</td>
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
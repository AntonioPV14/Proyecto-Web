
<div class="modal fade" id="modalEstudiante" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tituloModal">Docente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formEstudiante" name="formUsuario">
          <div class="form-group">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>
          <div class="form-group">
            <label for="edad" class="form-label">Dirección:</label>
            <input type="text" class="form-control" id="edad" name="edad">
          </div>
          <div class="form-group">
            <label for="direccion" class="form-label">Cédula:</label>
            <input type="text" class="form-control" id="direccion" name="direccion">
          </div>
          <div class="form-group">
            <label for="cedula" class="form-label">Clave:</label>
            <input type="text" class="form-control" id="cedula" name="cedula">
          </div>
          <div class="form-group">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="text" class="form-control" id="telefono" name="telefono">
          </div>
          <div class="form-group">
            <label for="correo" class="form-label">Correo:</label>
            <input type="text" class="form-control" id="correo" name="correo">
          </div>
          <div class="form-group">
            <label for="listEstado" class="form-label">Nivel de Estado</label>
            <select class="form-control" id="listEstado" name="listEstado"> 
                <option value="1">Excelente</option>
                <option value="1">Medio</option>
                <option value="1">Bajo</option>
            </select>
          </div>
          <div class="form-group">
            <label for="listEstado" class="form-label">Estado</label>
            <select class="form-control" id="listEstado" name="listEstado"> 
                <option value="1">Activo</option>
                <option value="1">Inactivo</option>
            </select>
          </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" id="guardar">Guardar</button>

            </div>
        </form>
      </div>
    </div>
  </div>
</div>



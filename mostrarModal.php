<div class="modal fade" id="mostrarModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-tittle"><span class="fa fa-user"></span> Agregar Contactos</h4></center>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="guardar.php" method="post" id="MiFormularioAgg">
                    <div class="form-group">
                        <label for="" class="col-form-label">Nombre: </label>
                        <input type="text" class="form-control" name="nombreContacto">
                    </div>

                    <div class="form-group">
                        <label for="" class="col-form-label">Apellido: </label>
                        <input type="text" class="form-control" name="apellido">
                    </div>

                    <div class="form-group">
                        <label for="" class="col-form-label">Teléfono: </label>
                        <input type="tel" class="form-control" name="telefono">
                    </div>

                    <div class="form-group">
                        <label for="" class="col-form-label">Email: </label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label for="" class="col-form-label">Dirección: </label>
                        <input type="text" class="form-control" name="direccion">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="LimpiarModal()" >Cancelar </button>
                    <button type="submit" name="guardar" class="btn btn-success"><span class="fa fa-save"></span> Aceptar </button>
                </div>
                </form>
        </div>
    </div>
</div>

<script>
    function LimpiarModal(){
        document.getElementById("MiFormularioAgg").reset();
    }
</script>
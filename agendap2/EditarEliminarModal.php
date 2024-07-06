<div class="modal fade" id="edit_<?php echo $row['idPersona']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-tittle"><span class="fa fa-user"></span> Editar Contacto</h4></center>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="editar.php?id=<?php echo $row['idPersona']; ?>" method="post">
                    <div class="form-group">
                        <label for="" class="col-form-label">Nombre: </label>
                        <input type="text" class="form-control" name="nombreContacto" value="<?php echo $row['Nombre'];?>">
                    </div>

                    <div class="form-group">
                        <label for="" class="col-form-label">Apellido: </label>
                        <input type="text" class="form-control" name="apellido" value="<?php echo $row['Apellido'];?>">
                    </div>

                    <div class="form-group">
                        <label for="" class="col-form-label">Teléfono: </label>
                        <input type="tel" class="form-control" name="telefono" value="<?php echo $row['Telefono'];?>">
                    </div>

                    <div class="form-group">
                        <label for="" class="col-form-label">Email: </label>
                        <input type="email" class="form-control" name="email" value="<?php echo $row['Correo'];?>">
                    </div>

                    <div class="form-group">
                        <label for="" class="col-form-label">Dirección: </label>
                        <input type="text" class="form-control" name="direccion" value="<?php echo $row['Direccion'];?>">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar </button>
                    <button type="submit" name="edit" class="btn btn-success"><span class="fa fa-edit"></span> Actualizar </button>
                </div>
                </form>
        </div>
    </div>
</div>

<!-- Modal Eliminar-->
<div class="modal fade" id="eliminar_<?php echo $row['idPersona']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-tittle"><span class="fa fa-user"></span> Borrar Contacto</h4></center>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <p> Esta seguro de eliminar el contacto?</p>
                <h2><?php echo $row['Nombre']." ".$row['Apellido'];?></h2>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar </button>
                <a href="eliminar.php?id=<?php echo $row['idPersona']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Aceptar</a>
            </div>
        </div>
    </div>
</div>
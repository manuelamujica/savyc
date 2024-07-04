<?php require_once 'controlador/roles.php';?>
<div class="content-wrapper">
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Ajustar Roles</h1>
        </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                    <li class="breadcrumb-item active">Roles</li>
                </ol>
            </div>
        </div>
    </div>
    </section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
            <!-- Botón para ventana modal -->
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalregistrarroles">Registrar Roles</button>
            </div>
            <div class="card-body">

            <table id="categorias" class="table table-bordered table-striped">
                <thead>
                        <tr>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                </thead>
                <tbody>
                <?php 
                    
                    foreach ($registro as $dato) {
                ?>
                    <tr>
                        <td><?php echo $dato['rol']?></td>
                        <td><?php echo $dato['status']?></td>
                        <td>
                        <form method="POST">
                        <button name="modificar" class="btn btn-primary btn-sm editar" value="<?php echo $dato['rol']; ?>">
                            <i class="fas fa-pencil-alt" title="Editar"></i>
                        </button>
                        <button name="eliminar" class="btn btn-danger btn-sm eliminar" value="<?php echo $dato['rol']; ?>">
                            <i class="fas fa-trash-alt" title="Eliminar"></i>
                        </button>
                        </form>
                        </td>
                    </tr>
                    <?php } ?>                    
                    
                </tbody>
            </table>
        </div>
    </div>

<!-- =======================
MODAL REGISTRAR ROLES
============================= -->

        <div class="modal fade" id="modalregistrarroles" tabindex="-1" aria-labelledby="modalregistrarrolLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo rol</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form id="formAgregarRol" method="post">
                            <!--   NOMBRE DEL ROL     -->
                            <div class="form-group">
                                <label for="rol">Rol</label>
                                <input type="text" class="form-control" name="rol" required>
                            </div>

                            <!--   STATUS     -->
                            <div class="form-group">
                            <label for="status">Status</label>
                                <select name="status" id="option">
                                    <option></option>
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

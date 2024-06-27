<?php require_once 'controlador/divisa.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Gestión de Divisas</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item active">Divisas</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarDivisa">
                                    Agregar Divisa
                                </button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="paymentTypesTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <td>id</td>
                                            <th>Nombre</th>
                                            <th>Simbolo/Abreviatura</th>
                                            <th>Status</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Aquí se llenará la tabla dinámicamente con PHP -->
                                        <?php 
                                    
                                        foreach ($consulta as $divisa) {
                                        ?>
                                        <tr>
                                            <td><?php echo $divisa['cod_divisa']?></td>
                                            <td><?php echo $divisa['nombre']?></td>
                                            <td><?php echo $divisa['abreviatura'] ?></td>
                                            <td><?php echo $divisa['status']?></td>
                                            <td>
                                            <form method="POST">
                                            <button name="modificar" class="btn btn-info btn-sm editar" value="<?php echo $dato['cod_divisa']; ?>">
                                                <i class="fas fa-pencil-alt" title="Editar"></i>
                                            </button>
                                            <button name="eliminar" class="btn btn-danger btn-sm eliminar" value="<?php echo $dato['cod_divisa']; ?>">
                                                <i class="fas fa-trash-alt" title="Eliminar"></i>
                                            </button>
                                            </form>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    
    <!-- Agregar Divisa Modal -->
<div class="modal fade" id="modalAgregarDivisa">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Agregar Divisa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form role="form" method="post">
                <div class="modal-body">
                    <div class="form-group">
                    <label for="nombre">Nombre de la Divisa</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                    <label for="simbolo">Símbolo o Abreviatura</label>
                    <input type="text" class="form-control" id="simbolo" name="simbolo" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" name="agregar">Guardar Divisa</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
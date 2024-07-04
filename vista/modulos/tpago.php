<?php require_once 'controlador/tpago.php'; ?>

<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Gestión de Tipos de Pago</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
            <li class="breadcrumb-item active">Tipos de Pago</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPaymentTypeModal">
                                    Registrar Tipo de Pago
                                </button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="paymentTypesTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Nombre</th>
                                            <!--<th>Moneda</th>-->
                                            <th>Status</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Aquí se llenará la tabla dinámicamente con PHP -->
                                        <?php 
                                    
                                        foreach ($registro as $dato) {
                                        ?>
                                        <tr>
                                            <td><?php echo $dato['cod_tipo_pago']?></td>
                                            <td><?php echo $dato['medio_pago']?></td>
                                            <td><?php echo $dato['status'] ?></td>
                                            <td>
                                            <form method="POST">
                                            <button name="editar" class="btn btn-primary btn-sm editar" value="<?php echo $dato['cod_tipo_pago']; ?>">
                                                <i class="fas fa-pencil-alt" title="Editar"></i>
                                            </button>
                                            <button name="eliminar" class="btn btn-danger btn-sm eliminar" value="<?php echo $dato['cod_tipo_pago']; ?>">
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

    <!-- Modal para registrar tipo de pago -->
    <div class="modal fade" id="addPaymentTypeModal" tabindex="-1" role="dialog" aria-labelledby="addPaymentTypeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #db6a00 ;color: #ffffff; ">
                    <h5 class="modal-title" id="addPaymentTypeModalLabel">Registrar Tipo de Pago</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addPaymentTypeForm" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="paymentTypeName">Nombre del Tipo de Pago</label>
                            <input type="text" class="form-control" id="paymentTypeName" name="tipo_pago" required>
                        </div>
                        <!--<div class="form-group">
                            <label for="currency">Moneda</label>
                            <select class="form-control" id="currency" name="moneda">
                                <option value="BS">Bolivares</option>
                                Opciones de monedas cargadas dinámicamente con PHP 
                            </select>
                        </div>-->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" name="registrar">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


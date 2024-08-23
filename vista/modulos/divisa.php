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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalregistrarDivisa">
                                    Registrar Divisa
                                </button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            <div class="table-responsive">
                                <table id="paymentTypesTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Símbolo/Abreviatura</th>
                                            <th>Status</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Aquí se llenará la tabla dinámicamente con PHP -->
                                        <?php foreach ($consulta as $divisa) { ?>
                                        <?php if ($divisa['status'] != 2): ?>
                                        <tr>
                                            <td><?php echo $divisa['cod_divisa']?></td>
                                            <td><?php echo $divisa['nombre']?></td>
                                            <td><?php echo $divisa['abreviatura'] ?></td>
                                            <td>
                                                <?php if ($divisa['status']==1):?>
                                                    <span class="badge bg-success">Activo</span>
                                                <?php else:?>
                                                    <span class="badge bg-danger">Inactivo</span>
                                                <?php endif;?>
                                            </td>
                                            <td>
                                            <button name="editar" title="Editar" class="btn btn-primary btn-sm editar" data-toggle="modal" data-target="#editModal" 
                                            data-codigo="<?php echo $divisa["cod_divisa"]; ?>" 
                                            data-nombre="<?php echo $divisa["nombre"]; ?>" 
                                            data-abreviatura="<?php echo $divisa["abreviatura"]; ?>"
                                            data-status="<?php echo $divisa["status"]; ?>" >
                                            <i class="fas fa-pencil-alt"></i>
                                            </button>
                                            <button name="eliminar" title="Eliminar" class="btn btn-danger btn-sm eliminar" data-toggle="modal" data-target="#eliminardivisa"
                                            data-codigo="<?php echo $divisa["cod_divisa"]; ?>" 
                                            data-nombre="<?php echo $divisa["nombre"]; ?>" >
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            </form>
                                            </td>
                                        </tr>
                                        <?php endif; ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
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
    
    <!-- registrar Divisa Modal -->
<div class="modal fade" id="modalregistrarDivisa">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background: #db6a00 ;color: #ffffff; ">
                <h4 class="modal-title">Registrar Divisa</h4>
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
                    <button type="submit" class="btn btn-primary" name="registrar">Guardar</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

<!-- =======================
MODAL EDITAR DIVISA
============================= -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Información</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm" method="post">
                    <div class="form-group">
                        <label for="codigo">Código</label>
                        <input type="text" class="form-control" id="codigo" name="codigo" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre de la Divisa</label>
                        <input type="text" class="form-control" id="nombre1" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="abreviatura">Símbolo o Abreviatura</label>
                        <input type="text" class="form-control" id="abreviatura" name="abreviatura" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" form="editForm" class="btn btn-primary" name="actualizar">Guardar cambios</button>
            </div>
        </div>
    </div>
</div>

<!-- =======================
MODAL CONFIRMAR ELIMINAR 
============================= -->

    <div class="modal fade" id="eliminardivisa" tabindex="-1" aria-labelledby="eliminardivisaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eliminardivisaLabel">Confirmar Eliminación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form id="elimodal" method="post"> 
                    <p>¿Está seguro que desea eliminar a <span id="divisaNombre"></span>?</p>
                    <input type="hidden" id="divisaCodigo" name="divisaCodigo"> 
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" form="elimodal" class="btn btn-danger" id="confirmDelete" name="borrar">Eliminar</button>
            </div>
            </div>
        </div>
    </div>

<script>
    $('#nombre').blur(function (e){
        var buscar=$('#nombre').val();
        $.post('index.php?pagina=divisa', {buscar}, function(response){
        if(response != ''){
            alert('La divisa ya se encuentra registrada');
        }
        },'json');
    });

    $('#nombre1').blur(function (e){
        var buscar=$('#nombre1').val();
        $.post('index.php?pagina=divisa', {buscar}, function(response){
        if(response != ''){
            alert('La divisa ya se encuentra registrada');
        }
        },'json');
    });

    $('#editModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var codigo = button.data('codigo');
            var nombre = button.data('nombre');
            var abreviatura = button.data('abreviatura');
            var status = button.data('status');

            // Modal
            var modal = $(this);
            modal.find('.modal-body #codigo').val(codigo);
            modal.find('.modal-body #nombre1').val(nombre);
            modal.find('.modal-body #abreviatura').val(abreviatura);
            modal.find('.modal-body #status').val(status);
        });

        $('#eliminardivisa').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); 
        var nombre = button.data('nombre');
        var codigo = button.data('codigo');

        var modal = $(this);
        modal.find('#divisaNombre').text(nombre);
        modal.find('.modal-body #divisaCodigo').val(codigo);
    });

</script>
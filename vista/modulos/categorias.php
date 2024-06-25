<div class="content-wrapper">
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Categorías</h1>
        </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                    <li class="breadcrumb-item active">Categorías</li>
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
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">Agregar categoría</button>
            </div>
            <div class="card-body">

            <table id="categorias" class="table table-bordered table-striped table-hover">
                <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Categoría</th>
                            <th>Acciones</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                    include_once 'controlador/categorias.php';

                    foreach ($registro as $datos){
                        ?>
                        <tr>
                            <td> <?php echo $datos["cod_categoria"] ?></td>
                            <td> <?php echo $datos["nombre"] ?></td>
                            <td>
                                <form method="post" action="index.php/?pagina=categorias">
                                    <button name="modificar" class="btn btn-info btn-sm editar" value="<?php echo $dato["nombre"] ?>"><i class="fas fa-pencil-alt" title="editar"></i></button>
                                    <button name="eliminar" class="btn btn-danger btn-sm eliminar" value="<?php echo $dato["nombre"] ?>"><i class="fas fa-trash-alt" title="eliminar"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

<!-- =======================
MODAL AGREGAR CATEGORÍA 
============================= -->

<div class="modal fade" id="modalAgregarCategoria" tabindex="-1" aria-labelledby="modalAgregarCategoriaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header" style="background-color: #db6a00; color:#ffffff">
                <h5 class="modal-title" id="exampleModalLabel">Agregar categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="formAgregarCategoria" action="index.php?pagina=categorias" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre de la categoría</label>
                        <input type="text" class="form-control" name="nombre" required>
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

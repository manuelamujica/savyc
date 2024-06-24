<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Configuración</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Botones para acciones de IVA -->
                <div class="row">
                    <div class="col-md-4">
                        <button class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#modalAgregarIVA">
                            <i class="fas fa-plus"></i> Añadir IVA
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-lg btn-secondary btn-block" data-toggle="modal" data-target="#modalModificarIVA">
                            <i class="fas fa-edit"></i> Modificar IVA
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-lg btn-info btn-block" data-toggle="modal" data-target="#modalVerIVA">
                            <i class="fas fa-list"></i> Ver Listado de IVA
                        </button>
                    </div>
                </div>

                <!-- Modal para agregar IVA -->
                <div class="modal fade" id="modalAgregarIVA" tabindex="-1" role="dialog" aria-labelledby="modalAgregarIVALabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalAgregarIVALabel">Añadir IVA</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="formAgregarIVA" method="POST">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="nuevoIva">IVA:</label>
                                        <input type="text" class="form-control" id="nuevoIva" name="tasa" placeholder="Ingrese nuevo precio IVA" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="fechaNuevoIva">Fecha:</label>
                                        <input type="date" class="form-control" id="fechaNuevoIva" name="fecha" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary" name="accion" value="añadir">Añadir</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal para modificar IVA -->
                <div class="modal fade" id="modalModificarIVA" tabindex="-1" role="dialog" aria-labelledby="modalModificarIVALabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalModificarIVALabel">Modificar IVA</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="formModificarIVA" method="POST" action="?pagina=configuracion">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="modificarIva">IVA:</label>
                                        <input type="text" class="form-control" id="modificarIva" name="tasa" placeholder="Ingrese nuevo precio IVA" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="fechaModificarIva">Fecha:</label>
                                        <input type="date" class="form-control" id="fechaModificarIva" name="fecha" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary" name="accion" value="modificar">Modificar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal para ver listado de IVA -->
                <div class="modal fade" id="modalVerIVA" tabindex="-1" role="dialog" aria-labelledby="modalVerIVALabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalVerIVALabel">Listado de IVA</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Buscar" id="buscarIVA">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" onclick="buscarIVA()">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Porcentaje</th>
                                                <th>Fecha</th>
                                            </tr>
                                        </thead>
                                        <tbody id="ivaList">
                                            <!-- Aquí se insertarán las filas con los datos del IVA -->
                                            <tr>
                                                <td>1</td>
                                                <td>16%</td>
                                                <td>2023-06-15</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>18%</td>
                                                <td>2024-01-01</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Botón para agregar tipo de pago -->
                <div class="row mt-4">
                    <div class="col-md-4">
                        <button class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#modalAgregarTipoPago">
                            <i class="fas fa-plus-circle"></i> Agregar Tipo de Pago
                        </button>
                    </div>
                </div>

                <!-- Modal para agregar tipo de pago -->
                <div class="modal fade" id="modalAgregarTipoPago" tabindex="-1" role="dialog" aria-labelledby="modalAgregarTipoPagoLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalAgregarTipoPagoLabel">Agregar Tipo de Pago</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="formAgregarTipoPago" method="POST" action="index.php?pagina=configuracion">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="tipo_pago">Tipo de Pago:</label>
                                        <input type="text" class="form-control" id="tipo_pago" name="tipo_pago" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="moneda">Moneda:</label>
                                        <select class="form-control" id="moneda" name="moneda" required>
                                            <option value="USD">Dólares (USD)</option>
                                            <option value="VES">Bolívares (VES)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary" name="agregar" value="agregar">Agregar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
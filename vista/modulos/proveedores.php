<?php require_once 'controlador/proveedores.php'; ?>
<div class="content-wrapper">
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Proveedores</h1>
        </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                    <li class="breadcrumb-item active">Proveedores</li>
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
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalProv">Agregar proveedor</button>
            </div>
            <div class="card-body">
              <div class="card-tools">
              <div class="float-right">
                <button type="button" class="btn btn-success btn-sm">
                  <i class="fas fa-file-excel"></i> Excel
                </button>
                <button type="button" class="btn btn-danger btn-sm">
                  <i class="fas fa-file-pdf"></i> PDF
                </button>
                <button type="button" class="btn btn-secondary btn-sm">
                  <i class="fas fa-print"></i> Imprimir
                </button>
              </div>
              <br>
              <br>
                <div class="input-group input-group-sm" >
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Tabla -->
              <table id="categorias" class="table table-bordered table-striped table-hover">
              <thead>
                    <tr>
                      <th>Codigo</th>
                      <th>Rif</th>
                      <th>Razon social</th>
                      <th>Correo electronico</th>
                      <th>Direccion</th>
                      <th>Status</th>
                      <th>accion</th>
                    </tr>
              </thead>
              <tbody>
                    <?php
                    foreach ($registro as $datos){
                        ?>
                        <tr>
                            <td> <?php echo $datos["cod_prov"] ?></td>
                            <td> <?php echo $datos["rif"] ?></td>
                            <td> <?php echo $datos["razon_social"] ?></td>
                            <td> <?php echo $datos["email"] ?></td>
                            <td> <?php echo $datos["direccion"] ?></td>
                            <td> <?php echo $datos["status"] ?></td>
                            <td>
                                <form method="post" >
                                    <button name="modificar" class="btn btn-primary btn-sm editar" value="<?php echo $dato["nombre"] ?>"><i class="fas fa-pencil-alt" title="editar"></i></button>
                                    <button name="eliminar" class="btn btn-danger btn-sm eliminar" value="<?php echo $dato["nombre"] ?>"><i class="fas fa-trash-alt" title="eliminar"></i></button>
                                </form>
                            </td>
                        <?php } ?>
                </tbody>
              </table>
<!-- Modal de registro-->
<div class="modal fade" id="modalProv" tabindex="-1" role="dialog" aria-labelledby="provModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 700px">
      <div class="modal-header" style=" background:#db6a00; color:#ffffff">
        <h5 class="modal-title" id="provModalLabel">Agregar proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="card card-default">
            <div class="card-header"  style=" background:#db6a00; color:#ffffff">
              <h3 class="card-title">Información</h3>
            </div>
        
            <div class="card-body">
              <form id="formproveedores"  method="post">  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="rif">Rif</label>
                        <input type="text" class="form-control" id="rif" name="rif" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="razon_social">Razon Social</label>
                        <input type="text" class="form-control" id="razon_social" name="razon_social" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Correo Electronico:</label>
                        <input type="email" class="form-control" id="email" name="correo" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                    <label for="direccion">Direccion:</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" required>
                  </div>
                </div>
              </div>
              <!--<div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="Status">Status:</label>
                    <input type="number" class="form-control" name="status">
                  </div>
                </div>
              </div>-->
            </div>
          </div>
<!-- / Registro de proveedor-->
<!-- Registro de representante--> 
          <!--<div class="card card-default">
            <div class="card-header" style=" background:#db6a00; color:#ffffff">
              <h3 class="card-title">Datos del Representante</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="cedula">Cedula:</label>
                    <input type="text" class="form-control" id="cedula" name="cedula" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="apellido">Apellido:</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="Telefono">Teléfono :</label>
                    <input type="text" class="form-control" id="Telefono" name="telefono" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="telefono">Telefono adicional:</label>
                    <input type="number" class="form-control" id="telefono" name="telefono" required>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="status">Status :</label>
                    <input type="number" class="form-control" id="status" name="status" required>
                  </div>
                </div>
              </div>
    Registro de representante--> 
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" name="registrar">Guardar</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
</div>
</div>
</div>
<!--fin  Modal de registro-->


<!-- Modal editar -->
<div class="modal fade" id="editPove" tabindex="-1" role="dialog" aria-labelledby="editPove" aria-hidden="true" class="btn-primary">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header" style=" background:#db6a00; color:#ffffff ">
        <h5 class="modal-title" id="editPove">Editar el Proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <form action="index.php?pagina=proveedores" method="post">
        <div class="card card-default">
          <div class="card-header" style=" background:#db6a00; color:#ffffff ">
            <h3 class="card-title">Datos del proveedor</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="rif">Rif:</label>
                  <input type="text" class="form-control" id="rif" name="rif" required>
                </div>
               
              </div>
               <div class="col-md-6">
                  <label for="razon social">Razon Social:</label>
                  <input type="text" class="form-control" id="social" name="razon_social" required>
                </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Correo Electronico:</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                  <label for="direccion">Direccion:</label>
                  <input type="text" class="form-control" id="direccion" name="direccion" required>
                </div>
              </div>
              <div class="col-md-6">
              
                <div class="form-group">
                  <label for="status ">Status:</label>
                 <input type="number" class="form-control" id="status" name="status" required>
                </div>
               
              </div>
                  
            </div>
          </div>
        </div>
        <div class="card card-default">
          <div class="card-header"   style=" background:#db6a00; color:#ffffff">
            <h3 class="card-title">Datos del Representante</h3>
          </div>
          <div class="card-body">
             <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="cedula">Cedula:</label>
                  <input type="text" class="form-control" id="cedula" name="cedula" required>
                </div>
               
              </div>
               <div class="col-md-6">
                  <label for=" nombre">nombre:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
              
              <div class="col-md-6">
               <div class="form-group">
              <label for="apellido ">Apellido:</label>
              <input type="text" class="form-control" id="apellido" name="apellido" required>
                </div>

              </div>

               <div class="col-md-6">
                <div class="form-group">
                  <label for="telefono">Telefono:</label>
                  <input type="text" class="form-control" id="telefono" name="telefono" required>
                </div>
               
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="telefono">Telefono Adicional:</label>
                  <input type="text" class="form-control" id="telefono" name="telefono" required>
                </div>
               
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="status">Status:</label>
                  <input type="text" class="form-control" id="status" name="status" required>
                </div>
               
              </div>
              </div>  
            </div>
          </div>
        </div>
        <div class="modal-footer">
      
        <button type="button" class="btn btn-danger" id="crear-btn">Cerrar</button>
        <button type="submit" class="btn btn-primary " value="Registrar" name="registrar">Guardar Cambios </button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>


<!-- Modal eliminar-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #F72E2E">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Desea eliminar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger">Sí</button>
      </div>
    </div>
  </div>
</div>
<!--FIN--->

</div>
</section>

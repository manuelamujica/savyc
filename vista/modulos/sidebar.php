<!--(Todo esto esta en index.php de adminLte)-->

<!-- MAIN SIDEBAR CONTAINER-->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Logo -->
    <a href="inicio" class="brand-link">
        <img src="vistas/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    <div class="sidebar">
    <!-- Sidebar(Usuario) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="vistas/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrador</a>
            </div>
        </div>
<!--=================
    NAV (MENU) 
=====================-->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="productos" class="nav-link">
                        <i class="fa fa-shopping-bag"></i>
                        <p>
                            Productos
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="categorias" class="nav-link">
                        <i class="nav-icon fa fa-table"></i>
                        <p>
                            Categorías
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="clientes" class="nav-link">
                        <i class="nav-icon fa fa-shopping-cart"></i>
                        <p>
                            Compras
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="ventas" class="nav-link">
                        <i class="nav-icon fa fa-file"></i>
                        <p>Ventas 
                        <!--<span class="badge badge-info right">2</span>-->
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="clientes" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>Clientes</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="proveedores" class="nav-link">
                        <i class="far fa fa-truck"></i>
                        <p>Proveedores</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
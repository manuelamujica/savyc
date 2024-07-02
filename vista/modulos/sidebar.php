<!--(Todo esto esta en index.php de adminLte)-->

<!-- MAIN SIDEBAR CONTAINER-->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Logo -->
    <a href="inicio" class="brand-link">
        <img src="vista/dist/img/logo-icono.png" alt="Quesera Don Pedro" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">SAVYC</span>
    </a>
    <div class="sidebar">
    
<!--=================
    NAV (MENU) 
=====================-->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="productos" class="nav-link">
                        <i class="nav-icon fa fa-shopping-bag"></i>
                        <p>
                            Productos
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-dolly-flatbed nav-icon"></i>
                        <p>
                            Ajuste de Inventario<i class="right fas fa-angle-left nav-icon"></i>
                        </p>
                    </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="carga" class="nav-link">
                                    <i class="fas fa-sort-amount-up-alt nav-icon"></i>
                                    <p>Carga de productos</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="descarga" class="nav-link">
                                    <i class="fas fa-sort-amount-down-alt nav-icon"></i>
                                    <p>Descarga de productos</p>
                                </a>
                            </li>
                        </ul>
                        <li class="nav-item">
                            <a href="categorias" class="nav-link">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                    Categorías
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="compras" class="nav-link">
                                <i class="nav-icon fa fa-shopping-cart"></i>
                                <p>
                                    Compras
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="venta" class="nav-link">
                                <i class="nav-icon fa fa-file"></i>
                                <p>
                                    Ventas 
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="clientes" class="nav-link">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    Clientes
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="proveedores" class="nav-link">
                                <i class="nav-icon far fa fa-truck"></i>
                                <p>
                                    Proveedores
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-cog mr-2 nav-icon"></i>
                                <p>
                                    Configuracion<i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="divisa" class="nav-link">
                                        <i class="fas fa-dollar-sign nav-icon"></i>
                                        <p>
                                            Divisas
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="unidad" class="nav-link">
                                        <i class="fas fa-balance-scale nav-icon"></i>
                                        <p>
                                            Unidades de medida
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="general" class="nav-link">
                                        <i class="fas fa-cogs nav-icon"></i>
                                        <p>
                                            Ajuste general
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="roles" class="nav-link">
                                        <i class="fas fa-user-cog nav-icon"></i>
                                        <p>
                                            Ajuste de roles
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tpago" class="nav-link">
                                        <i class="fas fa-money-bill nav-icon"></i>
                                        <p>
                                            Tipos de pago
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
    </aside>
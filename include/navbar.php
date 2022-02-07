<nav class="bottom-navbar">
    <div class="container">
        <ul class="nav page-navigation">
            <li class="nav-item mr-4 <?php echo ($_GET['module'] == 'dashboard') ? 'active':''; ?>">
                <a class="nav-link " href="main?module=dashboard">
                    <i class="link-icon" data-feather="home"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mr-4 <?php echo ($_GET['module'] == 'quotes') ? 'active':''; ?>">
                <a class="nav-link " href="main?module=quotes">
                    <i class="link-icon" data-feather="clipboard"></i>
                    <span class="menu-title">Cotizaciones</span>
                </a>
            </li>
            <?php if($_SESSION['usuarios'] == 1){ ?>
            <li class="nav-item mr-4 <?php echo ($_GET['module'] == 'users') ? 'active':''; ?>">
                <a class="nav-link" href="main?module=users">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="menu-title">Usuarios</span>
                </a>
            </li>
            <?php } ?>
            <?php if($_SESSION['configuracion'] == 1){ ?>
            <li
                class="nav-item mr-4 <?php echo ($_GET['module'] == 'settings'  || $_GET['module'] == 'vouchers' || $_GET['module'] == 'contacts' || $_GET['module'] == 'payment_methods') ? 'active':''; ?>">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="menu-title">Configuración</span>
                    <i class="link-arrow"></i>
                </a>
                <div class="submenu">
                    <ul class="submenu-item">
                        <li class="nav-item <?php echo ($_GET['module'] == 'settings') ? 'active':''; ?>"><a
                                class="nav-link" href="main?module=settings">General</a></li>
                        <li class="nav-item <?php echo ($_GET['module'] == 'vouchers') ? 'active':''; ?>"><a
                                class="nav-link" href="main?module=vouchers">Comprobantes</a>
                        </li>
                        <li class="nav-item <?php echo ($_GET['module'] == 'contacts') ? 'active':''; ?>"><a
                                class="nav-link" href="main?module=contacts">Contactos</a>
                        </li>
                        <li class="nav-item <?php echo ($_GET['module'] == 'payment_methods') ? 'active':''; ?>"><a
                                class="nav-link" href="main?module=payment_methods">Métodos de pago</a>
                        </li>
                    </ul>
                </div>
            </li>
            <?php } ?>



        </ul>
    </div>
</nav>
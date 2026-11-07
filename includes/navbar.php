<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">
            <i class="bi bi-code-slash text-primary me-2"></i>TechNova Solutions
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>" href="about.php">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'services.php') ? 'active' : ''; ?>" href="services.php">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'portfolio.php') ? 'active' : ''; ?>" href="portfolio.php">Portafolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

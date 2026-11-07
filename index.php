<?php
$pageTitle = 'Inicio';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>
<section class="hero-section text-center">
    <div class="container">
        <h1 class="display-4 fw-bold mb-3">Soluciones Tecnológicas Inteligentes</h1>
        <p class="lead mb-4">Migración completa de plantilla estática HTML a PHP modular en servidor local.</p>
        <div>
            <a href="services.php" class="btn btn-light btn-lg me-2 fw-semibold">Nuestros Servicios</a>
            <a href="contact.php" class="btn btn-outline-light btn-lg fw-semibold">Contáctanos</a>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="card p-4 h-100 shadow-sm">
                    <div class="feature-icon"><i class="bi bi-speedometer2"></i></div>
                    <h4 class="fw-bold">Rendimiento Óptimo</h4>
                    <p class="text-muted">Desarrollo estructurado con PHP modular para máxima velocidad y mantenimiento.</p>
                    <a href="about.php" class="text-decoration-none fw-semibold">Saber más &rarr;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 h-100 shadow-sm">
                    <div class="feature-icon"><i class="bi bi-shield-check"></i></div>
                    <h4 class="fw-bold">Seguridad Robusta</h4>
                    <p class="text-muted">Procesamiento del lado del servidor asegurando validaciones y enlaces fiables.</p>
                    <a href="services.php" class="text-decoration-none fw-semibold">Explorar &rarr;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 h-100 shadow-sm">
                    <div class="feature-icon"><i class="bi bi-arrow-repeat"></i></div>
                    <h4 class="fw-bold">100% PHP Modular</h4>
                    <p class="text-muted">Componentes reutilizables: header, navbar y footer unificados en toda la web.</p>
                    <a href="portfolio.php" class="text-decoration-none fw-semibold">Ver proyectos &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once 'includes/footer.php'; ?>

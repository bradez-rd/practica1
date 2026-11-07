<?php
$pageTitle = 'Servicios';
require_once 'includes/header.php';
require_once 'includes/navbar.php';

$servicios = [
    ['icon' => 'bi-code-square', 'titulo' => 'Desarrollo Web en PHP', 'desc' => 'Arquitectura limpia con servidores Apache/Nginx y PHP 8+.'],
    ['icon' => 'bi-cloud-upload', 'titulo' => 'Despliegues en la Nube', 'desc' => 'Configuraciones listas para producción en Replit, CodeSandbox y VPS.'],
    ['icon' => 'bi-diagram-3', 'titulo' => 'Migración de Sitios', 'desc' => 'Conversión de sitios estáticos a dinámicos con rutas relativas.'],
    ['icon' => 'bi-layout-text-window', 'titulo' => 'Integración de Plantillas', 'desc' => 'Adaptación de Bootstrap, AdminLTE y Start Bootstrap a PHP.']
];
?>
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Nuestros Servicios</h2>
        <p class="text-muted">Soluciones completas de desarrollo y soporte web.</p>
    </div>
    <div class="row g-4">
        <?php foreach ($servicios as $s): ?>
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 p-4 text-center">
                <div class="feature-icon mb-3"><i class="bi <?php echo $s['icon']; ?>"></i></div>
                <h5 class="fw-bold mb-2"><?php echo $s['titulo']; ?></h5>
                <p class="text-muted small mb-0"><?php echo $s['desc']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require_once 'includes/footer.php'; ?>

<?php
$pageTitle = 'Acerca de';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>
<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-lg-6">
            <span class="badge bg-primary px-3 py-2 mb-2">Sobre Nosotros</span>
            <h2 class="fw-bold display-6 mb-3">Innovación y Desarrollo Web Profesional</h2>
            <p class="text-muted lead">Especialistas en transformar aplicaciones estáticas en plataformas web dinámicas y escalables.</p>
            <p class="text-secondary">En esta práctica se realizó la migración desde un diseño estático HTML5 hacia una arquitectura dinámica en PHP, corrigiendo los enlaces del menú y verificando cada recurso.</p>
            <a href="contact.php" class="btn btn-primary">Iniciar Proyecto</a>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="card p-4 bg-light border-0 shadow-sm">
                <h4 class="fw-bold"><i class="bi bi-check-circle-fill text-success me-2"></i>Objetivos de la Práctica</h4>
                <ul class="list-unstyled mt-3 mb-0">
                    <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i>Conversión de extensiones .html a .php</li>
                    <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i>Corrección de etiquetas &lt;a href="...php"&gt;</li>
                    <li class="mb-2"><i class="bi bi-chevron-right text-primary me-2"></i>Rutas relativas CSS/JS sin errores 404</li>
                    <li><i class="bi bi-chevron-right text-primary me-2"></i>Validación y prueba en servidor local</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php require_once 'includes/footer.php'; ?>

<?php
$pageTitle = 'Portafolio';
require_once 'includes/header.php';
require_once 'includes/navbar.php';

$proyectos = [
    ['titulo' => 'Plataforma MediCitas', 'cat' => 'PHP / Dashboard', 'desc' => 'Panel administrativo de citas médicas.'],
    ['titulo' => 'E-Commerce TechNova', 'cat' => 'FullStack', 'desc' => 'Tienda en línea con procesamiento PHP.'],
    ['titulo' => 'Portal Corporativo', 'cat' => 'Frontend & PHP', 'desc' => 'Sitio modular con navegación dinámica.']
];
?>
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Proyectos Destacados</h2>
        <p class="text-muted">Galería de trabajos implementados y optimizados.</p>
    </div>
    <div class="row g-4">
        <?php foreach ($proyectos as $p): ?>
        <div class="col-md-4">
            <div class="card h-100 p-4">
                <span class="badge bg-secondary mb-2 align-self-start"><?php echo $p['cat']; ?></span>
                <h4 class="fw-bold mt-2"><?php echo $p['titulo']; ?></h4>
                <p class="text-muted"><?php echo $p['desc']; ?></p>
                <a href="contact.php" class="btn btn-outline-primary mt-auto">Solicitar Información</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require_once 'includes/footer.php'; ?>

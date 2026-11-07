<?php
$pageTitle = 'Contacto';
require_once 'includes/header.php';
require_once 'includes/navbar.php';

$mensajeEnviado = false;
$nombre = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = htmlspecialchars($_POST['nombre'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $mensaje = htmlspecialchars($_POST['mensaje'] ?? '');
    if (!empty($nombre) && !empty($email)) {
        $mensajeEnviado = true;
    }
}
?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card p-4 p-md-5 shadow-sm">
                <h2 class="fw-bold mb-3 text-center">Contáctanos</h2>
                <p class="text-center text-muted mb-4">Envíanos un mensaje y responderemos a la mayor brevedad.</p>

                <?php if ($mensajeEnviado): ?>
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <i class="bi bi-check-circle-fill me-2 fs-5"></i>
                        <div>¡Gracias <strong><?php echo $nombre; ?></strong>! Tu mensaje ha sido recibido exitosamente por el servidor PHP.</div>
                    </div>
                <?php endif; ?>

                <form method="POST" action="contact.php">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nombre Completo</label>
                        <input type="text" name="nombre" class="form-control" required placeholder="Ej. Juan Pérez">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Correo Electrónico</label>
                        <input type="email" name="email" class="form-control" required placeholder="juan@ejemplo.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Mensaje</label>
                        <textarea name="mensaje" rows="4" class="form-control" required placeholder="Describe tu requerimiento..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once 'includes/footer.php'; ?>

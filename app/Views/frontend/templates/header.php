<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda de tenis</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('/') ?>">
                <img src="<?= base_url('assets/img/logo.png') ?>" width="40px">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php $session = session();
                    if (!empty($session->get('user'))): ?>
                        <span>
                            <?= "Bienvenid@ " . esc($session->get('user')) ?>
                        </span>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= base_url('backend') ?>"><strong>Admin panel</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= base_url('session') ?>"><strong>Cerrar sesión</strong></a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= base_url('/') ?>"><strong>Inicio</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= base_url('tienda/products/all') ?>"><strong>Productos</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= base_url('admin') ?>"><strong>Iniciar sesión</strong></a>
                        </li>
                    <?php endif ?>               
                </ul>
            </div>            
        </div>
    </nav>    
</header>  
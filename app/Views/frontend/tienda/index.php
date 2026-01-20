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
    <div class="container-fluid">

        <h1>Bienvenid@ a Tienda de tenis</h1>
        <br><br>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h3><span class="badge bg-light"><img src="<?= base_url('assets/img/mas_popular.png') ?>" alt="Producto popular" width="40px"></span>  Productos más populares</h3>
                </div>
            </div>
            <div class="row">
                <?php if ($populares !== []): ?>
                    <?php foreach ($populares as $producto_popular): ?>
                        <div class="col">
                            <a href="<?= base_url('tienda/products/' . $producto_popular['Cod_producto']) ?>">
                                <img src="<?= base_url('assets/img/productos/' . $producto_popular['imagen']) ?>" alt="<?= $producto_popular['Modelo'] ?>" width="200px">
                            </a> 
                            <p><?= esc($producto_popular['Modelo']) ?></p>
                        </div>
                    <?php endforeach ?>
                <?php else: ?>
                    <p>No hay modelos populares disponibles.</p> 
                <?php endif ?>
            </div>
        </div>
        <br><br><br>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h3><span class="badge bg-light"><img src="<?= base_url('assets/img/ultimas_unidades.png') ?>" alt="Producto popular" width="40px"></span>  Últimas unidades</h3>
                </div>
            </div>
            <div class="row">
                <?php if ($ultimos !== []): ?>
                    <?php foreach ($ultimos as $producto_ultimo): ?>
                        <div class="col">
                            <a href="<?= base_url('tienda/products/' . $producto_ultimo['Cod_producto']) ?>">
                                <img src="<?= base_url('assets/img/productos/' . $producto_ultimo['imagen']) ?>" alt="<?= $producto_ultimo['Modelo'] ?>" width="200px">
                            </a> 
                            <p><?= esc($producto_ultimo['Modelo']) ?></p>
                        </div>
                    <?php endforeach ?>
                <?php else: ?>
                    <p>No hay productos en últimas oportunidades disponibles.</p> 
                <?php endif ?>
            </div>
        </div>
        <br><br><br>
    </div>
</body>
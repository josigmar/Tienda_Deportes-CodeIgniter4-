<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <title>Detalle Producto</title>
</head>
<body>
    <div class="container-fluid"></div>
        <div class="container">
            <div class="row">
                <div class="col"></div>
                    <h1>
                        <?= esc($products['Modelo']) ?>
                    </h1>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="<?= base_url('assets/img/productos/' . $products['imagen']) ?>" alt="<?= esc($products['Modelo']) ?>" width="500px">                        
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p><strong>Marca: </strong><?= esc($products['Marca']) ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p><strong>Peso: </strong><?= esc($products['Peso']) ?> gr.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p><strong>Precio: </strong><?= esc($products['Precio']) ?> €</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="<?= base_url('tienda/products/all') ?>">
                            <button class="btn btn-outline-secondary">Volver</button>
                        </a>                          
                    </div>
                </div>
            </div>
        </body>
    </html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <title>Productos</title>
</head>
<body>
    <div class="container-fluid">        
         <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Categorías</h1>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <ul class="nav nav-tabs nav-fill">
                        <?php if (!empty($categorias)): ?>
                            <?php foreach ($categorias as $categoria): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('tienda/products/category/' . $categoria['indice_cat']) ?>"><?= esc($categoria['nombre_cat']) ?></a>
                                </li>
                            <?php endforeach ?>
                        <?php endif ?>
                    </ul>
                    <br><br>
                </div>
            </div>

            <div class="row">
                <?php if ($products_list !== []): ?>
                    <?php foreach ($products_list as $product): ?>
                        <div class="col">                    
                            <a href="<?= base_url('tienda/products/' . $product['Cod_producto']) ?>">
                                <img src="<?= base_url('assets/img/productos/' . $product['imagen']) ?>" alt="<?= esc($product['Modelo']) ?>" width="200px">
                            </a>        
                            <p><?= esc($product['Modelo']) ?></p><br>                    
                        </div>
                    <?php endforeach ?>  
                <?php else: ?>
                    <p>No hay productos disponibles.</p> 
                <?php endif ?>              
            </div>
        </div>
    </div>
</body>
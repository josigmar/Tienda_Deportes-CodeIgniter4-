<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <title>Mi cuenta</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <h1>Bienvenido al panel de administración</h1>
            </div>
            <div class="row">
                <div class="alert alert-success" role="alert">
                    Usuario y contraseña correctos.
                </div>
            </div>
            <div class="row">
                <p>Has accedido correctamente al área de administración.</p>
            </div>            
        </div>
    </div>

    <div class="container-fluid">        
         <div class="container">
            <div class="row">
                <?php if ($products_list !== []): ?>
                    <?php foreach ($products_list as $product): ?>
                        <div class="col">   
                            <h4><?= esc($product['Modelo']) ?></h4>                 
                            <img src="<?= base_url('assets/img/productos/' . $product['imagen']) ?>" alt="<?= esc($product['Modelo']) ?>" width="200px">       
                            <br>  
                            <a href="<?= base_url('backend/tienda/products/' . $product['Cod_producto']) ?>">Ver</a>
                            <a href="<?= base_url('backend/tienda/update/' . $product['Cod_producto']) ?>">Editar</a>
                            <a href="<?= base_url('backend/tienda/del/' . $product['Cod_producto']) ?>">Eliminar</a>                  
                        </div>                        
                    <?php endforeach ?>  
                <?php else: ?>
                    <p>No hay productos disponibles.</p> 
                <?php endif ?>              
            </div>
        </div>
    </div>
</body>
</html>
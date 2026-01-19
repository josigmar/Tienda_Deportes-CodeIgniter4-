<section>
    <?php if ($products_list !== []): ?>
        <?php foreach ($products_list as $product): ?>
            <div>
                <h4><?= esc($product['Modelo']) ?></h4> 
                <img src="<?= base_url('assets/img/productos/' . $product['imagen']) ?>" width="300">                
                <p><b>Marca: </b><?= esc($product['Marca']) ?></p>
                <p><b>Peso: </b><?= esc($product['Peso']) ?></p>
                <p><b>Precio: </b><?= esc($product['Precio']) ?></p>
            </div>
            <a href="<?= base_url('backend/tienda/products/' . $product['Cod_producto']) ?>">Ver</a>
            <a href="<?= base_url('backend/tienda/update/' . $product['Cod_producto']) ?>">Editar</a>
            <a href="<?= base_url('backend/tienda/del/' . $product['Cod_producto']) ?>">Eliminar</a>
        <?php endforeach ?>
    <?php else: ?>
        <p>No hay productos disponibles.</p> 
    <?php endif ?>            
</section>
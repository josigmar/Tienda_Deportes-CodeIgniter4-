<section>
    <?php if ($products_list !== []): ?>
        <?php foreach ($products_list as $product): ?>
            <div>
                <a href="<?= base_url('tienda/products/' . $product['Cod_producto']) ?>"><h4><?= esc($product['Modelo']) ?></h4></a>                 
                <p><b>Marca: </b><?= esc($product['Marca']) ?></p>
                <p><b>Peso: </b><?= esc($product['Peso']) ?></p>
                <p><b>Precio: </b><?= esc($product['Precio']) ?></p>
            </div>
        <?php endforeach ?>
    <?php else: ?>
        <p>No hay productos disponibles.</p> 
    <?php endif ?>            
</section>
<section>
    <h2>Productos más populares</h2>
    <?php if ($populares !== []): ?>
        <?php foreach ($populares as $producto_popular): ?>
            <a href="<?= base_url('tienda/products/' . $producto_popular['Cod_producto']) ?>"><h4><?= esc($producto_popular['Modelo']) ?></h4></a> 
        <?php endforeach ?>
    <?php else: ?>
        <p>No hay modelos populares disponibles.</p> 
    <?php endif ?>        
    <h2>Últimas unidades</h2>
    <?php if ($ultimos !== []): ?>
        <?php foreach ($ultimos as $producto_ultimo): ?>
            <a href="<?= base_url('tienda/products/' . $producto_ultimo['Cod_producto']) ?>"><h4><?= esc($producto_ultimo['Modelo']) ?></h4></a> 
        <?php endforeach ?>
    <?php else: ?>
        <p>No hay productos en últimas oportunidades disponibles.</p> 
    <?php endif ?>      
</section>
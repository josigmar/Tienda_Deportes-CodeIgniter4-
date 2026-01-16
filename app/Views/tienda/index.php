<section>
    <h2>Productos más populares</h2>
    <?php if ($populares !== []): ?>
        <?php foreach ($populares as $producto_popular): ?>
            <h3><?= esc($producto_popular['Modelo']) ?></h3>  
        <?php endforeach ?>
    <?php else: ?>
        <p>No hay modelos populares disponibles.</p> 
    <?php endif ?>            
</section>
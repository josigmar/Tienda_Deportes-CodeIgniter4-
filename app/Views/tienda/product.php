<section>
    <h4><?= esc($products['Modelo']) ?></h4>
    <p><b>Marca: </b><?= esc($products['Marca']) ?></p>
    <p><b>Peso: </b><?= esc($products['Peso']) ?></p>
    <p><b>Precio: </b><?= esc($products['Precio']) ?></p>
    <p><a href="<?= base_url('tienda/products/all') ?>">Volver</a></p>
</section>
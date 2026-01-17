<section>
    <h4><?= esc($products['Modelo']) ?></h4>
    <img src="<?= base_url('assets/img/productos/' . $products['imagen']) ?>" width="300">
    <p><b>Marca: </b><?= esc($products['Marca']) ?></p>
    <p><b>Peso: </b><?= esc($products['Peso']) ?></p>
    <p><b>Precio: </b><?= esc($products['Precio']) ?></p>
    <p>
        <a href="<?= base_url('tienda/products/all') ?>">Volver</a>
    </p>
</section>
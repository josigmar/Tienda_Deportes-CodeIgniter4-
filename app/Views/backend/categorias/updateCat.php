<section>
    <h2>Editar Categoría</h2>
    <?= validation_list_errors() ?>

    <form action="<?= base_url('backend/categorias/update/' . $categoria['indice_cat']) ?>" method="post">
        <?= csrf_field() ?>
        
        <label>Nombre de la Categoría:</label>
        <input type="text" name="nombre_cat" value="<?= esc($categoria['nombre_cat']) ?>">
        
        <button type="submit">Actualizar</button>
        <a href="<?= base_url('backend/categorias') ?>">Cancelar</a>
    </form>
</section>
<section>
    <h2>Crear Categoría</h2>
    <?= validation_list_errors() ?>

    <form action="<?= base_url('backend/categorias/create') ?>" method="post">
        <?= csrf_field() ?>
        
        <label>Nombre de la Categoría:</label>
        <input type="text" name="nombre_cat" value="<?= set_value('nombre_cat') ?>">
        
        <button type="submit">Guardar</button>
        <a href="<?= base_url('backend/categorias') ?>">Cancelar</a>
    </form>
</section>
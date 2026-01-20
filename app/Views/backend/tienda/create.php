<section>
    <h2><?= esc($title) ?></h2> 

    <?= session()->getFlashdata('error') ?> 
    <?= validation_list_errors() ?>

    <form method="post" action="<?= base_url('backend/tienda/create') ?>"> 
        <?= csrf_field() ?>

        <label for="Modelo">Modelo</label>
        <input type="input" name="Modelo" value="<?= set_value('Modelo') ?>"> 
        
        <br><br> 
        
        <label for="Marca">Marca</label>
        <input type="input" name="Marca" value="<?= set_value('Marca') ?>">
        
        <br><br> 
        
        <label for="Peso">Peso</label>
        <input type="input" name="Peso" value="<?= set_value('Peso') ?>">
        
        <br><br> 
        
        <label for="Precio">Precio</label>
        <input type="input" name="Precio" value="<?= set_value('Precio') ?>">
        
        <br><br> 
        
        <label for="Stock">Stock</label>
        <input type="input" name="Stock" value="<?= set_value('Stock') ?>">
        
        <br><br> 
        
        <label for="Categoria">Categoría</label> 
        <select name="Categoria">
            <?php if (!empty($categorias) && is_array($categorias)): ?>     
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= $categoria['indice_cat'] ?>"> 
                        <?= $categoria['nombre_cat'] ?> 
                    </option> 
                <?php endforeach ?>
            <?php endif ?>
        </select> 
        
        <br><br> 
        
        <label for="Cod_producto">Código de producto</label> 
        <input type="input" name="Cod_producto" value="<?= set_value('Cod_producto') ?>"> 
        
        <br><br> 
        
        <input type="submit" name="submit" value="Crear producto">
        <button><a href="<?= base_url('backend') ?>">Cancelar</a></button>
    </form>
</section>
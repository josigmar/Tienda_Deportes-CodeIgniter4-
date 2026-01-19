<!-- Crear un botón examinar que permita subir una imagen al crear o editar un producto -->
<section>
    <h2><?= esc($title) ?></h2> 

    <?= session()->getFlashdata('error') ?> 
    <?= validation_list_errors() ?>

    <form method="post" action="<?= base_url('backend/tienda/updatedItem/' . $products['Cod_producto']) ?>"> 
        <?= csrf_field() ?>

        <label for="Modelo">Modelo</label>
        <input type="input" name="Modelo" value="<?= $products['Modelo'] ?>"> 
        
        <br><br> 
        
        <label for="Marca">Marca</label>
        <input type="input" name="Marca" value="<?= $products['Marca'] ?>">
        
        <br><br> 
        
        <label for="Peso">Peso</label>
        <input type="input" name="Peso" value="<?= $products['Peso'] ?>">
        
        <br><br> 
        
        <label for="Precio">Precio</label>
        <input type="input" name="Precio" value="<?= $products['Precio'] ?>">
        
        <br><br> 
        
        <label for="Stock">Stock</label>
        <input type="input" name="Stock" value="<?= $products['Stock'] ?>">
        
        <br><br> 
        
        <label for="Categoria">Categoría</label> 
        <select name="Categoria">
            <?php if (!empty($categorias) && is_array($categorias)): ?>     
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= $categoria['indice_cat'] ?>" 
                        <?= $categoria['indice_cat'] == $products['Categoria'] ? 'selected' : '' ?>>
                        <?= $categoria['nombre_cat'] ?> 
                    </option> 
                <?php endforeach ?>
            <?php endif ?>
        </select> 
        
        <br><br> 
        <!-- Aquí sería ideal que fuese un select que sólo mostrase los códigos disponibles de la categoría seleccionada -->
        <label for="Cod_producto">Código de producto</label> 
        <input type="text" name="Cod_producto" value="<?= $products['Cod_producto'] ?>" background-color="#e9ecef4f" readonly>       
        
        <br><br> 
        
        <input type="submit" name="submit" value="Editar producto">
        <button><a href="<?= base_url('backend') ?>">Cancelar</a></button>
    </form>
</section>
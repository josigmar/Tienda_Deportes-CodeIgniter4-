<section>
    <h2>Gestión de Categorías</h2>

    <table border="1" cellpadding="10" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorias as $cat): ?>
            <tr>
                <td><?= $cat['indice_cat'] ?></td>
                <td><?= esc($cat['nombre_cat']) ?></td>
                <td>
                    <a href="<?= base_url('backend/categorias/edit/'.$cat['indice_cat']) ?>">Editar</a> | 
                    <a href="<?= base_url('backend/categorias/delete/'.$cat['indice_cat']) ?>" 
                       onclick="return confirm('¿Seguro? Si tiene productos dará error.')">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
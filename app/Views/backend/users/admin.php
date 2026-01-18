<section>
    <?php if (! empty($user) && is_array($user)): ?>
        <h3><?= esc($user['Email']) ?></h3>
        <?php $session = session(); ?>
        <p>Hola, <b><?= $user['Nombre']?></b>. Has iniciado sesión correctamente.</p>
    <?php else: ?>
        <h3>No existe el usuario</h3>
        <p>No es posible encontrar este usuario.</p>
    <?php endif ?>
</section>
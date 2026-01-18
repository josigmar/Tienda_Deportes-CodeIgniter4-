<section>
    <h2><?= esc($title) ?></h2>

    <?php if (session()->getFlashdata('error')): ?>
        <?= session()->getFlashdata('error') ?>
    <?php endif ?>

    <?php if (isset($validation) && $validation->hasError()): ?>
        <?= $validation->listErrors() ?>
    <?php endif ?>

    <?php if (!empty($error)): ?>
        <?= esc($error) ?>
    <?php endif ?>

    <form method="post" action="<?= base_url('login') ?>">
        <?= csrf_field() ?>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?= set_value('email') ?>" required>

        <br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="<?= set_value('password') ?>" required>

        <br>

        <button type="submit" name="submit">Enviar</button>
    </form>
</section>
<section>
    <h2><?= esc($title) ?></h2>

    <?= session()->getFlashdata('error') ?>
    <?= validation_list_errors() ?>
    <br><br><br>

    <h1><?= esc($error) ?></h1>
    <form method="post" action="<?= base_url('login') ?>">
        <?= csrf_field() ?>
        <label for="email">Email</label>
        <input type="email" name="email" value="<?= set_value('email') ?>">
        <br>
        <label for="password">Password</label>
        <input type="input" name="password" value="<?= set_value('password') ?>">
        <br>
        <input type="submit" name="submit" value="Enviar">
    </form>
</section>
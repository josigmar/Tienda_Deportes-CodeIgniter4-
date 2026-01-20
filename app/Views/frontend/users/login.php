<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <title>Login</title>
</head>
<body>
    <div class="container-fluid">   
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1><?= esc($title) ?></h1>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <?php if (session()->getFlashdata('error')): ?>
                        <?= session()->getFlashdata('error') ?>
                    <?php endif ?>

                    <?php if (isset($validation) && $validation->hasError()): ?>
                        <?= $validation->listErrors() ?>
                    <?php endif ?>

                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= esc($error) ?>
                        </div>                         
                    <?php endif ?>

                    <form method="post" action="<?= base_url('login') ?>">
                    <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= set_value('email') ?>" required>
                            <div id="emailHelp" class="form-text">Este sitio no compartirá tu dirección de e-mail con nadie más.</div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?= set_value('password') ?>" required>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Entrar</button>
                    </form>
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</body>
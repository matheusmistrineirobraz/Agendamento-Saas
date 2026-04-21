<?php
require_once(__DIR__ . '/../config/config.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento Online</title>
    <?php require_once STATIC_PATH . 'style.php'; ?>
    <?php require_once IMPORT_PATH . 'bootstrap.php'; ?>


</head>

<body>
    <span>
        <?php require_once CONTROL_PATH . 'nav.php'; ?>
    </span>
    <hero class="container-fluid text-center row hero">
        <span class="col">
            <h1>Seja Bem-vindo ao Sistema</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem assumenda recusandae odit laboriosam ipsam, ut sequi quibusdam perferendis, architecto cum quasi aperiam praesentium nisi delectus officiis. Voluptates veritatis deleniti ratione!</p>
        </span>
        <span class="col">
            <img src="../static/images/sem-img.png" alt="Exemplo de Imagem!">
        </span>
    </hero>


    <main class="container-lg" id="branco">
        <a href="../login/login.php" class="btn btn-primary">Vá para a Pagina de Login</a>
    </main>
</body>

</html>
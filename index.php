<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <img src="https://placehold.co/150x150" alt="logo">

        <nav>
            <ul>
                <li><a href="#">Página</a></li>
                <li><a href="#">Página</a></li>
            </ul>
        </nav>
    </header>

    <?php
        if (!isset($_SESSION['id_usuario'])) {
    ?>

        <div class="container mt-5">
            <h2 class="mb-">Login</h2>

            <form action="./scripts/processa_form.php" method="POST">
                <input type="hidden" name="acao" value="login">
                
                <div class="form-group">
                    <label for="user">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Logar</button>
            </form>
        </div>

    <?php } else { ?>
        <div class="container mt-5">
            <h2 class="mb-4">Cadastro de Usuário</h2>
            <form action="./scripts/processa_form.php" method="POST">
                <input type="hidden" value="cadastro" name="acao">
                <div class="form-group">
                    <label for="firstName">Nome</label>
                    <input type="text" class="form-control" id="name" placeholder="Digite seu nome" name="name">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" id="password" placeholder="Digite sua senha" name="password">
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirme a Senha</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirme sua senha">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    <?php } ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
</body>

</html>
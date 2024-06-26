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

    <div class="container mt-5">
        <h2 class="mb-4">Cadastro de Usuário</h2>
        <form action="./scripts/processa_form.php" method="POST">
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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
<!doctype html>
<html lang="en">

<head>
    <title>Página Principal</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container mt-5">
            <div class="d-flex align-items-center justify-content-between">
                <h3>Página Principal</h3>
                <a class="btn btn-sm btn-primary" href="/Mvc/user/create">Criar Usuário</a>
            </div>
            <hr>
            <h5>Lista de Usuários Cadastrados</h5>
        </div>

        <div class="container">
            <ul class="list-group ">
                <?php foreach ($users as $user): ?>
                    <li class="list-group-item d-flex justify-content-between"><?= $user['nome'] ?>
                        <div>
                            <a class="btn btn-sm btn-primary" href="/Mvc/user/show/<?= $user['id'] ?>">Ver</a>
                            <a class="btn btn-sm btn-warning" href="/Mvc/user/edit/<?= $user['id'] ?>">Editar</a>
                            <a class="btn btn-sm btn-danger" href="/Mvc/user/delete/<?= $user['id'] ?>">Deletar</a>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>
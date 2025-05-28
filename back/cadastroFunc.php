<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <link rel="stylesheet" href="../estilos/StyleCadastro.css">
    </head>
    <body>
        <nav class="navbar bg-body-tertiary">
            <form class="container-fluid justify-content-start">
                <a href="../index.php"><button class="btn btn-outline-success me-2" type="button">   Inicio   </button></a>
                <a href="cadastroFunc.php"><button class="btn btn-sm btn-outline-secondary" type="button">Novo Funcionario</button></a>
                <a href="alterarSal.php"><button class="btn btn-sm btn-outline-secondary" type="button">Alterar salário</button></a>
                <a href="alterarDepto.php"><button class="btn btn-sm btn-outline-secondary" type="button">Alterar Departamento</button></a>
                <a href="DemitirFunc.php"><button class="btn btn-sm btn-outline-secondary" type="button">Demitir Funcionario</button></a>
            </form>
        </nav>
        <main>
            <section>
                <form action="post">
                    <div class="container">
                        <h1>Cadastro de Funcionário</h1>
                        <div class="direita">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="cargo" class="form-label">Cargo</label>
                                <input type="text" class="form-control" id="cargo" name="cargo" required>
                            </div>
                        </div>
                        <div class="esquerda">
                            <div class="mb-3">
                                <label for="salario" class="form-label">Departamento</label>
                                <input type="number" class="form-control" id="salario" name="salario" required>
                            </div>
                            <div class="mb-3">
                                <label for="salario" class="form-label">Cargo</label>
                                <input type="number" class="form-control" id="salario" name="salario" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="salario" class="form-label">Salário</label>
                            <input type="number" class="form-control" id="salario" name="salario" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </section>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </body>
</html>
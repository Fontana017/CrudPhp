<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos/Style.css">
    </head>
    <body>
        <nav class="navbar bg-body-tertiary">
            <form class="container-fluid justify-content-start">
                <a href="index.php"><button class="btn btn-outline-success me-2" type="button">   Inicio   </button></a>
                <a href="back/cadastroFunc.php"><button class="btn btn-sm btn-outline-secondary" type="button">Novo Funcionario</button></a>
                <a href="back/listarFunc.php"><button class="btn btn-sm btn-outline-secondary" type="button">Listar Funcionario</button></a>
                <a href="back/alterarSal.php"><button class="btn btn-sm btn-outline-secondary" type="button">Alterar salário</button></a>
                <a href="back/alterarDepto.php"><button class="btn btn-sm btn-outline-secondary" type="button">Alterar Departamento</button></a>
                <a href="back/DemitirFunc.php"><button class="btn btn-sm btn-outline-secondary" type="button">Demitir Funcionario</button></a>
            </form>
        </nav>
        <main>
            <section>
                <h1>Bem vindo ao crud de RH</h1>
                <br>
                <h3>Aqui você terá funções para gerenciar <br> os funcionarios de uma empresa</h3>
                <br>
                <br>
                <h3>Para começar clique no botão Novo Funcionario</h3>
                    <br>
                    <br>
                <a href="back/cadastroFunc.php"><button class="btn btn-outline-success me-2" type="button">Novo Funcionario</button></a>

            </section>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </body>
</html>
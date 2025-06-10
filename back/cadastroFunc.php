<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Funcionário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../estilos/StyleCadastro.css">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <form class="container-fluid justify-content-start">
            <a href="../index.php"><button class="btn btn-outline-success me-2" type="button">Inicio</button></a>
            <a href="cadastroFunc.php"><button class="btn btn-sm btn-outline-secondary" type="button">Novo Funcionario</button></a>
            <a href="listarFunc.php"><button class="btn btn-sm btn-outline-secondary" type="button">Listar Funcionario</button></a>
            <a href="alterarSal.php"><button class="btn btn-sm btn-outline-secondary" type="button">Alterar salário</button></a>
            <a href="alterarDepto.php"><button class="btn btn-sm btn-outline-secondary" type="button">Alterar Departamento</button></a>
            <a href="DemitirFunc.php"><button class="btn btn-sm btn-outline-secondary" type="button">Demitir Funcionario</button></a>
        </form>
    </nav>

    <main>
        <section class="container mt-4">
            <h1>Cadastro de Funcionário</h1>
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="id_departamento" class="form-label">ID do Departamento</label>
                            <input type="number" class="form-control" id="id_departamento" name="id_departamento" required>
                        </div>
                        <div class="mb-3">
                            <label for="id_cargo" class="form-label">ID do Cargo</label>
                            <input type="number" class="form-control" id="id_cargo" name="id_cargo" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>

            <!-- PHP -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

                try {
                    include("../conexao/conexao.php");

                    $nome = $_POST["nome"];
                    $email = $_POST["email"];
                    $id_departamento = $_POST["id_departamento"];
                    $id_cargo = $_POST["id_cargo"];

                    $sql = "INSERT INTO Funcionarios (nome, email, id_departamento, id_cargo) VALUES (?, ?, ?, ?)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("ssii", $nome, $email, $id_departamento, $id_cargo);
                    $stmt->execute();

                    echo "<div class='alert alert-success mt-3'>Funcionário cadastrado com sucesso.</div>";

                    $stmt->close();
                    $conn->close();
                } catch (mysqli_sql_exception $e) {
                    echo "<div class='alert alert-danger mt-3'>Erro ao cadastrar funcionário: " . $e->getMessage() . "</div>";
                }
            }
            ?>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demitir Funcionário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/StyleCadastro.css">
</head>
<body>
<nav class="navbar bg-body-tertiary">
    <form class="container-fluid justify-content-start">
        <a href="../index.php"><button class="btn btn-outline-success me-2" type="button"> Inicio </button></a>
        <a href="cadastroFunc.php"><button class="btn btn-sm btn-outline-secondary" type="button">Novo Funcionario</button></a>
        <a href="listarFunc.php"><button class="btn btn-sm btn-outline-secondary" type="button">Listar Funcionario</button></a>
        <a href="alterarSal.php"><button class="btn btn-sm btn-outline-secondary" type="button">Alterar salário</button></a>
        <a href="alterarDepto.php"><button class="btn btn-sm btn-outline-secondary" type="button">Alterar Departamento</button></a>
        <a href="DemitirFunc.php"><button class="btn btn-sm btn-outline-secondary" type="button">Demitir Funcionario</button></a>
    </form>
</nav>
<main>
    <section>
        <form action="" method="post">
            <div class="container">
                <h1>Demitir Funcionário</h1>
                <div class="direita">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email do Funcionário</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger">Excluir Cadastro</button>
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            try {
                include("../conexao/conexao.php");

                $email = $_POST['email'];

                $sql = "DELETE FROM Funcionarios WHERE email = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $email);

                if ($stmt->execute()) {
                    if ($stmt->affected_rows > 0) {
                        echo "<script language='javascript' type='text/javascript'>alert('Funcionario demitido.');window.location.href='index.php';</script>";
                    } else {
                        echo "<script language='javascript' type='text/javascript'>alert('Nenhum funcionário encontrado com esse email.');window.location.href='DemitirFunc.php';</script>";
                    }
                } else {
                    echo "<script language='javascript' type='text/javascript'>alert('Erro ao alterar o Id do usuario.');window.location.href='alterarSal.php';</script>";
                }


                
                $stmt->close();
                $conn->close();
            } catch (mysqli_sql_exception $e) {
                echo "<div class='mensagem erro mt-3'>Erro: " . $e->getMessage() . "</div>";
            }
        }
        ?>
    </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>
</html>
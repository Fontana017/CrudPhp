<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <link rel="stylesheet" href="../estilos/StyleCadastro.css">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
            <form class="container-fluid justify-content-start">
                <a href="../index.php"><button class="btn btn-outline-success me-2" type="button">   Inicio   </button></a>
                <a href="cadastroFunc.php"><button class="btn btn-sm btn-outline-secondary" type="button">Novo Funcionario</button></a>
                <a href="back/listarFunc.php"><button class="btn btn-sm btn-outline-secondary" type="button">Listar Funcionario</button></a>
                <a href="alterarSal.php"><button class="btn btn-sm btn-outline-secondary" type="button">Alterar salário</button></a>
                <a href="alterarDepto.php"><button class="btn btn-sm btn-outline-secondary" type="button">Alterar Departamento</button></a>
                <a href="DemitirFunc.php"><button class="btn btn-sm btn-outline-secondary" type="button">Demitir Funcionario</button></a>
            </form>
        </nav>
        
         <main>
        <section>
            <div class="container mt-5">
                <h1>Consultar Funcionários por Departamento</h1>
                <form method="post">
                    <div class="mb-3">
                        <label for="id_departamento" class="form-label">ID do Departamento</label>
                        <input type="number" class="form-control" id="id_departamento" name="id_departamento" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Consultar</button>
                </form>
            </div>
        </section>

        <section>
            <div class="container mt-4">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $id_departamento = $_POST['id_departamento'];

                    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

                    try {
                        include("../conexao/conexao.php");

                        $sql = "SELECT id_funcionario, nome, email, id_cargo FROM Funcionarios WHERE id_departamento = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("i", $id_departamento);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            echo "<table class='table table-bordered mt-4'>";
                            echo "<thead><tr><th>ID</th><th>Nome</th><th>Email</th><th>ID Cargo</th></tr></thead><tbody>";

                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row["id_funcionario"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["nome"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["id_cargo"]) . "</td>";
                                echo "</tr>";
                            }

                            echo "</tbody></table>";
                        } else {
                            echo "<div class='alert alert-warning'>Nenhum funcionário encontrado para o departamento informado.</div>";
                        }

                        $stmt->close();
                        $conn->close();
                    } catch (mysqli_sql_exception $e) {
                        echo "<div class='alert alert-danger'>Erro na consulta: " . $e->getMessage() . "</div>";
                    }
                }
                ?>
            </div>
        </section>
    </main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>
</html>
    
</body>
</html>
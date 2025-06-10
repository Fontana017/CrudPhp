<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cadastro</title>
    <link rel="stylesheet" href="../estilos/styleVerificar.css"> <!-- Opcional -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php">Início</a></li>
                <li><a href="cadastro.php">Cadastrar Usuário</a></li>
                <li><a href="verificarCadastro.php">Listar Usuários</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="containerSection">
            <form method="post" action="">
                <label for="id_usuario">Digite o ID do Usuário:</label>
                <input type="number" name="id_usuario" id="id_usuario" required>
                <input type="submit" value="Buscar">
            </form>
        </section>

        <?php
        if (isset($_POST["id_usuario"])) {
            include("../conexao/conexao.php");

            $id = $_POST["id_usuario"];
            $sql = "SELECT * FROM usuarios WHERE ID = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $resultado = $stmt->get_result();

            if ($resultado->num_rows > 0) {
                $usuario = $resultado->fetch_assoc();
                ?>

                <section>
                    <form method="post" action="processaAtualizacao.php">
                        <input type="hidden" name="id" value="<?= $usuario['ID'] ?>">

                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($usuario['NOME']) ?>" required>

                        <label for="sobrenome">Sobrenome:</label>
                        <input type="text" name="sobrenome" id="sobrenome" value="<?= htmlspecialchars($usuario['SOBRENOME']) ?>" required>

                        <label for="curso">Curso:</label>
                        <select name="curso" id="curso" required>
                            <option value="ads" <?= $usuario['CURSO'] == 'ads' ? 'selected' : '' ?>>Análise e Desenvolvimento de Sistemas</option>
                            <option value="engenharia_software" <?= $usuario['CURSO'] == 'engenharia_software' ? 'selected' : '' ?>>Engenharia de Software</option>
                            <option value="sistemas_informacao" <?= $usuario['CURSO'] == 'sistemas_informacao' ? 'selected' : '' ?>>Sistemas da Informação</option>
                            <option value="ciencias_computacao" <?= $usuario['CURSO'] == 'ciencias_computacao' ? 'selected' : '' ?>>Ciência da Computação</option>
                        </select>

                        <input type="submit" value="Atualizar">
                    </form>
                </section>

                <?php
            } else {
                echo "<div class='mensagem erro'>Usuário com ID $id não encontrado.</div>";
            }

            $stmt->close();
            $conn->close();
        }

        if (isset($_GET['atualizado']) && $_GET['atualizado'] == 1) {
            echo "<div class='mensagem sucesso'>Cadastro atualizado com sucesso!</div>";
        }
        ?>
    </main>
</body>
</html>

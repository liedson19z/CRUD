<?php

<<<<<<< HEAD
require __DIR__ . "/connect.php";

$pdo = Connect::getInstance();

$stmt = $pdo->query("SELECT * FROM users ORDER BY id ASC");

=======

$users = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<<<<<<< HEAD
    <link rel="stylesheet" href="style.css">
=======

    <meta charset="UTF-8">
    <title>CRUD PHP</title>
</head>

<body>

<<<<<<< HEAD
<div class="container">

    <h1>Cadastro de Alunos</h1>

    <form action="store.php" method="post">
        <p>
            <label>Nome:</label><br>
            <input type="text" name="name" required>
=======
    
>>>>>>
        </p>

        <p>
            <label>E-mail:</label><br>
            <input type="email" name="email" required>
        </p>

        <p>
            <label>Curso:</label><br>
            <input type="text" name="document" required>
        </p>

        <button type="submit">Cadastrar</button>
    </form>

    <hr>

    <h2>Lista de alunos</h2>

<<<<<<< HEAD
=======
    <!--
        Tabela que exibe os alunos cadastrados no banco de dados.
        O atributo cellpadding adiciona espaçamento interno nas células.
    -->
>>>>>>> 4e9339113163cc35dc37de6769f47e0a188ef372
    <table cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Curso</th>
                <th>Cadastrado em</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
<<<<<<< HEAD
=======
            <!--
                foreach percorre todos os usuários retornados do banco.
                A cada repetição, a variável $user representa um aluno.
            -->
>>>>>>> 4e9339113163cc35dc37de6769f47e0a188ef372
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user["id"] ?></td>
                    <td><?= $user["name"] ?></td>
                    <td><?= $user["email"] ?></td>
                    <td><?= $user["document"] ?></td>
                    <td><?= date("d/m/Y H:i", strtotime($user["created_at"])) ?></td>
                    <td>
<<<<<<< HEAD
                        <a href="edit.php?id=<?= $user["id"] ?>">Editar</a> |
=======
                        <!--
                            Link para editar o aluno.
                            O ID é enviado pela URL para que o arquivo edit.php
                            saiba qual registro deve ser alterado.
                        -->
                        <a href="edit.php?id=<?= $user["id"] ?>">Editar</a> |

                        <!--
                            Link para excluir o aluno.
                            O onclick chama uma confirmação em JavaScript
                            antes de seguir para a exclusão.
                        -->
>>>>>>> 4e9339113163cc35dc37de6769f47e0a188ef372
                        <a href="delete.php?id=<?= $user["id"] ?>" onclick="return confirm('Tem certeza que deseja excluir este aluno?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
<<<<<<< HEAD
=======
                <!--
                    colspan="6" faz a célula ocupar as 6 colunas da tabela.
                    count($users) conta quantos alunos existem no array.
                -->
>>>>>>> 4e9339113163cc35dc37de6769f47e0a188ef372
                <td colspan="6">Total de alunos: <?= count($users) ?></td>
            </tr>
        </tfoot>
    </table>

<<<<<<< HEAD
</div>

=======
>>>>>>> 4e9339113163cc35dc37de6769f47e0a188ef372
</body>

</html>
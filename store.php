<?php

<<<<<<< HEAD
require __DIR__ . "/connect.php";

=======

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$document = trim($_POST["document"] ?? "");

<<<<<<< HEAD
=======
/**
 * Validação básica:
 * se qualquer campo estiver vazio, a execução é interrompida.
 */
>>>>>>> 4e9339113163cc35dc37de6769f47e0a188ef372
if ($name === "" || $email === "" || $document === "") {
    die("Preencha todos os campos.");
}

<<<<<<< HEAD
try {
    $pdo = Connect::getInstance();

    $stmt = $pdo->prepare("
        INSERT INTO users (name, email, document)
        VALUES (:name, :email, :document)
    ");

    $stmt->execute([
        ":name" => $name,
        ":email" => $email,
        ":document" => $document
    ]);

    header("Location: index.php");
    exit;

} catch (PDOException $e) {
    echo "ERRO: " . $e->getMessage();
}
=======
/**
 * Obtém a conexão com o banco.
 */
$pdo = Connect::getInstance();

/**
 * Prepara a instrução SQL de inserção.
 *
 * prepare() é a forma recomendada quando existem dados dinâmicos,
 * pois ajuda a evitar SQL Injection.
 */
$stmt = $pdo->prepare("
    INSERT INTO users (name, email, document)
    VALUES (:name, :email, :document)
");

/**
 * Executa a instrução preparada, enviando os valores
 * para os placeholders nomeados.
 */
$stmt->execute([
    ":name" => $name,
    ":email" => $email,
    ":document" => $document
]);

/**
 * Redireciona o usuário para a página principal após o cadastro.
 */
header("Location: index.php");

/**
 * Encerra a execução do script após o redirecionamento.
 */
exit;
>>>>>>> 4e9339113163cc35dc37de6769f47e0a188ef372

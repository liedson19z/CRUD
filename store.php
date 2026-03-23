<?php

require __DIR__ . "/connect.php";

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$document = trim($_POST["document"] ?? "");

if ($name === "" || $email === "" || $document === "") {
    die("Preencha todos os campos.");
}

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
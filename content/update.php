<?php
require_once __DIR__ . '/../conexao.php';
require_once __DIR__ . '/../authentication.php';
/*@var $db PDO*/
$stmt = $db->prepare('update paginas set conteudo = :conteudo where id = :id');
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':conteudo', $_POST['conteudo']);

if($stmt->execute()) {
    return header('Location:/admin');
}


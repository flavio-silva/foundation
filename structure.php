<?php
require_once __DIR__ . '/conexao.php';

$sql = 'drop table if exists paginas';
$db->query($sql);

#Criando tabela paginas
$sql = 'create table paginas
(
    id int unsigned auto_increment primary key,
    nome varchar(255) not null,
    conteudo text
)';
$db->query($sql);

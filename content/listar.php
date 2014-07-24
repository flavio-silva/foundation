<?php
    require_once __DIR__ . '/../authentication.php';
    require_once __DIR__ . '/../conexao.php';

/* @var $db PDO*/
$stmt = $db->query('select * from paginas');
$paginas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<h4 class="text-center">Listagem de páginas</h4>
<br />
<table class="table">

    <th>Id</th>
    <th>Página</th>
    <th>Ação</th>
<?php foreach($paginas as $pagina):?>
    <tr>
        <td><?= $pagina['id']?></td>
       <td><?= $pagina['nome']?></td>
        <td><a href="/?acao=editar&id=<?=$pagina['id']?>">Editar Conteúdo</a>
        &nbsp;| &nbsp;
        <a href="?acao=apagar&id=<?=$pagina['id']?>">Apagar Conteúdo</a>
        </td>


    </tr>
    <?php endforeach;?>
</table>
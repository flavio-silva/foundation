<?php
    require_once __DIR__ . '/../authentication.php';
    require_once __DIR__ . '/../conexao.php';
?>

<?php if(empty($_GET)):

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
        <td><a href="/admin?acao=editar&id=<?=$pagina['id']?>">Editar Conteúdo</a>
        &nbsp;| &nbsp;
        <a href="/admin?acao=deletar&id=<?=$pagina['id']?>">Apagar Conteúdo</a>
        </td>
    </tr>
    <?php endforeach;?>
</table>
<?php else:?>
    <?php if($_GET['acao'] == 'editar'):
        $stmt = $db->prepare('select conteudo from paginas where id=:id');
        $stmt->bindValue(':id', $_GET['id']);
        $stmt->execute();
        $conteudo = $stmt->fetch(PDO::FETCH_ASSOC)['conteudo'];
    ?>
    <textarea name="editor1">
        <?=$conteudo?>
    </textarea>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
    <?php endif;?>

<?php endif;?>
<?php
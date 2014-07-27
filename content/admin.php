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
        <td><a href="/admin?acao=editar&id=<?=$pagina['id']?>">Editar Conteúdo</a></td>
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
    <h4 class="text-center">Edição de conteúdo</h4>
    <br/>
    <form method="post" action="/update">
        <input type="hidden" name="id" value="<?=$_GET['id']?>" />
        <textarea name="conteudo">
            <?=$conteudo?>
        </textarea>
        <br />
        <input type="submit" name="salvar" value="Salvar" class="btn-primary" />
        <input type="button" name="cancelar" value="Cancelar" onclick="javaScript: window.open('/admin','_self')"/>
        <script>
            CKEDITOR.replace( 'conteudo' );
        </script>
    </form>
    
    <?php endif;?>

<?php endif;?>
<?php
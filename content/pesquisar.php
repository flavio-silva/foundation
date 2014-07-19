<?php if(! empty($_POST)):
/* @var $db PDO*/
$sql = "select nome from paginas where conteudo regexp :conteudo";
$stmt = $db->prepare($sql);
$stmt->bindValue(':conteudo', $_POST['search']);
$stmt->execute();
?>
<h5 class="text-success">
    Páginas com o termo pesquisado
</h5>

<?php foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $page):
?>

<a href="/<?=$page['nome']?>"><?=$page['nome']?></a><br />
<?php endforeach;?>

<br />

<a href="/pesquisar">Pesquisar novamente</a>
<?php else:?>
<h5 class="text">Digite uma palavra chave</h5>
<form method="post" action="">
    
    <input type="text" name="search"/>
    <br />
    <input type="submit" name="Enviar" class="btn"/>
</form>
<?php endif;?>
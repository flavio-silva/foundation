<?php if(empty($_POST)):?>
<h5 class="text">Preencha os campos abaixo:</h5>
<form action="" method="post" name="contato">
    <label for="nome">Nome:&nbsp;&nbsp;</label><input type="text" name="nome" id="nome" required="required"/>
    <label for="email">Email:&nbsp;&nbsp;</label><input type="email" name="email" id="email" required="required"/>
    <label for="assunto">Assunto:&nbsp;&nbsp;</label><input type="text" name="assunto" id="assunto" required="required"/>
    <label for="mensagem">Mensagem:&nbsp;&nbsp;</label>
    <textarea style="width: 400px; height: 150px;" name="mensagem" id="mensagem" required="required"></textarea>
    <br />
    <input type="submit" name="enviar" class="btn">
    </form>
<?php else:?>
<h5 class="text-info">Dados enviados com sucesso! Abaixo seguem os dados que você enviou:</h5>
<p>Nome:&nbsp;&nbsp;<?= $_POST['nome']?> </p>
<p>Email: <?= $_POST['email']?> </p>
<p>Assunto: <?= $_POST['assunto']?> </p>
<p>Mensagem: <?= $_POST['mensagem']?> </p>
<?php endif;?>
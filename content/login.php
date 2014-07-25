
<?php
if(!empty($_POST)) {
    $authentication = function() use ($db){
        $stmt = $db->prepare('select * from usuarios where usuario=:usuario');
        $stmt->bindValue(':usuario', $_POST['usuario']);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        if($usuario) {
            if(password_verify($_POST['senha'],$usuario['senha'])) {
                return true;
            }
            return false;
        }
        return false;
    };
    session_start();
    if($authentication()) {
        $_SESSION['auth'] = true;
        return header('Location:/admin');
    }
};
?>

<?php if(!empty($_POST)):?>
<div class="alert alert-error">Usuário e/ou senha incorreto(s)</div>
<?php endif;?>

<h4 class="text-center">Acesso à área restrita</h4>
<form method="post" action="">
    <label for="usuario">Usuário</label>
    <input type="text" name="usuario" id="usuario" required="required"/>

    <label for="senha">Senha</label>
    <input type="password" name="senha" id="senha" required="required"/>
    <br />
    <input type="submit" name="login" class="btn"/>
</form>
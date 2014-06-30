<?php
//Colando o cabeçalho do documento e o menu
require_once __DIR__ . '/../layout/header.php';

//validacao e inclusao do conteudo
if(!empty($_GET['pagina'])) {
    if(in_array($_GET['pagina'], array('home', 'empresa', 'produtos', 'servicos', 'contato'))) {
        require_once __DIR__ . '/../content/' . $_GET['pagina'] . '.php';
    } else {
        exit('Página não encontrada');
    }
} else {
    require_once __DIR__ . '/../content/home.php';
}
//aqui fica o rodape
require_once __DIR__ . '/../layout/footer.php';
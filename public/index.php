<?php
// conexao com banco de dados utilizando pdo
require_once __DIR__ . '/../conexao.php';

$route = preg_filter('/^\//', '', $_SERVER['REQUEST_URI']);
$route = ($route == null)?('home'):($route);

$validRoutes = ['home', 'empresa','produtos', 'servicos', 'contato', 'pesquisar'];

function getContent($db, callable $checkRoute)
{
    $page = call_user_func($checkRoute);
    if($page) {

        $stmt = $db->prepare('select * from paginas where nome=:page');
        $stmt->bindValue(':page', $page);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC)['conteudo'];

    } else {
        http_response_code(404);
        return 'Erro 404: Página não existente';
    }
}

//Colando o cabeçalho do documento e o menu
require_once __DIR__ . '/../layout/header.php';

//Conteudo
echo getContent($db, function() use($route, $validRoutes){
    if(in_array($route, $validRoutes)) {
        return $route;
    } else {
        return false;
    }
});

//Se a pagina tiver html, neste caso paginas contato e pesquisar
if(in_array($route, array('contato', 'pesquisar')) && file_exists(__DIR__ . "/../content/{$route}.php")) {

    require_once __DIR__ . "/../content/{$route}.php";
}

//aqui fica o rodape
require_once __DIR__ . '/../layout/footer.php';
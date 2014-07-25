<?php
// conexao com banco de dados utilizando pdo
require_once __DIR__ . '/../conexao.php';

$route = preg_filter('/[?].*/', '', $_SERVER['REQUEST_URI']);
$route = preg_filter('/^\//','', $_SERVER['REQUEST_URI']);
$route = ($route == null)?('home'):($route);


$routes = array(
    'html' => array(
        'contato', 'pesquisar', 'login', 'listar'
    ),
    'db' => array(
        'home', 'empresa','produtos', 'servicos'
    )
);

function getContent(PDO $db, $route, array $routes)
{
    if(in_array($route, $routes['db'])) {

        $stmt = $db->prepare('select * from paginas where nome=:page');
        $stmt->bindValue(':page', $route);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC)['conteudo'];

    } elseif(in_array($route, $routes['html'])  && file_exists(__DIR__ . "/../content/{$route}.php")) {
        require_once __DIR__ . "/../content/{$route}.php";

    } else {
        http_response_code(404);
        return 'Erro 404: Página não existente';
    }
}

//Colando o cabeçalho do documento e o menu
require_once __DIR__ . '/../layout/header.php';

//Conteudo

echo getContent($db, $route, $routes);

//aqui fica o rodape
require_once __DIR__ . '/../layout/footer.php';
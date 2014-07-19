<?php
// conexao com banco de dados utilizando pdo
require_once __DIR__ . '/../conexao.php';

$route = preg_filter('/^\//', '', $_SERVER['REQUEST_URI']);
$route = ($route == null)?('home'):($route);


$validRoutes = ['home', 'empresa', ]

// Funcao para validar as rotas e verificar se o arquivo requisitado existe
function checkRoute ($route, array $validRoutes) {
    if(in_array($route, $validRoutes) && file_exists(__DIR__ . '/../content/' . $route . '.php')) {
        return true;
    } else {
        return false;
    }
};

if(checkRoute($route, $validRoutes) === true) {
    //O unico conteudo com require, pois se trata de um formulario
    if(in_array($route, array('contato', 'pesquisar'))) {
        require_once '/../content/' . $route . '.php';
    } else {
        require __DIR__ . '/../fixtures.php';
        $sql = 'select * from paginas where nome=:nome';
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':nome', $route);
        $stmt->execute();
        $pagina = $stmt->fetch(\PDO::FETCH_ASSOC);
        echo $pagina['conteudo'];
    }
    
} else {
    http_response_code(404);
    echo 'Erro 404: Página não existente';
}

//Colando o cabeçalho do documento e o menu
require_once __DIR__ . '/../layout/header.php';

//Conteudo

//aqui fica o rodape
require_once __DIR__ . '/../layout/footer.php';
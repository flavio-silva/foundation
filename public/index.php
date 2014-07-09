<?php

$route = preg_filter('/^\//', '', $_SERVER['REQUEST_URI']);
$route = ($route == null)?('home'):($route);

//Colando o cabeçalho do documento e o menu
require_once __DIR__ . '/../layout/header.php';

$validRoutes = ['home', 'empresa', 'produtos', 'servicos','contato'];

// Funcao para validar as rotas e verificar se o arquivo requisitado existe
function checkRoute ($route, array $validRoutes) {
    if(in_array($route, $validRoutes) && file_exists(__DIR__ . '/../content/' . $route . '.php')) {
        return true;
    } else {
        return false;
    }
};

if(checkRoute($route, $validRoutes) === true) {
    require_once '/../content/' . $route . '.php';
} else {
    http_response_code(404);
    echo 'Erro 404: Página não existente';
}

//aqui fica o rodape
require_once __DIR__ . '/../layout/footer.php';
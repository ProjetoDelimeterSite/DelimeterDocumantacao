<?php

if ($_SERVER['REQUEST_URI'] === '/delimeter/sobre') {
    include_once __DIR__ . '/delimeter.php';
} elseif ($_SERVER['REQUEST_URI'] === '/delimeter/calculo') {
    include_once __DIR__ . '/delimeter.php';
} elseif ($_SERVER['REQUEST_URI'] === '/paciente/cadastro') {
    include_once __DIR__ . '/paciente.php';
} elseif ($_SERVER['REQUEST_URI'] === '/api/paciente') {
    include_once __DIR__ . '/paciente.php';
} elseif ($_SERVER['REQUEST_URI'] === '/nutricionista/cadastro') {
    include_once __DIR__ . '/nutricionista.php';
} elseif ($_SERVER['REQUEST_URI'] === '/medico/cadastro') {
    include_once __DIR__ . '/medico.php';
} elseif ($_SERVER['REQUEST_URI'] === '/paciente/login') {
    include_once __DIR__ . '/paciente.php';
} elseif ($_SERVER['REQUEST_URI'] === '/nutricionista/login') {
    include_once __DIR__ . '/nutricionista.php';
} elseif ($_SERVER['REQUEST_URI'] === '/medico/login') {
    include_once __DIR__ . '/medico.php';
} elseif ($_SERVER['REQUEST_URI'] === '/paciente') {
    include_once __DIR__ . '/paciente.php';
} elseif ($_SERVER['REQUEST_URI'] === '/nutricionista') {
    include_once __DIR__ . '/nutricionista.php';
} elseif ($_SERVER['REQUEST_URI'] === '/medico') {
    include_once __DIR__ . '/medico.php';
} elseif ($_SERVER['REQUEST_URI'] === '/usuario/cadastro') {
    include_once __DIR__ . '/usuario.php';
} elseif ($_SERVER['REQUEST_URI'] === '/usuario/login') {
    include_once __DIR__ . '/usuario.php';
} elseif ($_SERVER['REQUEST_URI'] === '/api/usuario') {
    include_once __DIR__ . '/usuario.php';
} elseif ($_SERVER['REQUEST_URI'] === '/login/usuario') {
    include_once __DIR__ . '/usuario.php';
} else {
    // 404 Not Found
    http_response_code(404);
    echo "<h1 style='text-align:center;margin-top:60px;font-family:sans-serif;color:#888'>404 - Página não encontrada</h1>";
}
?>
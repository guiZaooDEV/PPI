<?php
require_once 'controller.php';
require_once 'view.php';

$controller = new Controller();
$view = new View($controller);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);

    if ($nome && $matricula) {
        $controller->cadastrar($nome, $matricula);
    }
}

echo $view->mostrarFormulario();
echo $view->mostrarDados();
?>
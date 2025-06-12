<?php
require_once 'controller.php';

class View {
    private $controller;

    public function __construct(Controller $controller) {
        $this->controller = $controller;
    }

    public function mostrarFormulario() {
        return '
        <form method="POST" action="">
            <label>Nome:</label><br>
            <input type="text" name="nome"><br><br>

            <label>Matrícula:</label><br>
            <input type="text" name="matricula"><br><br>

            <input type="submit" value="Cadastrar">
        </form>';
    }

    public function mostrarDados() {
        $dados = $this->controller->getDados();

        if (!empty($dados['nome']) && !empty($dados['matricula'])) {
            return "<p>Nome: {$dados['nome']} - Matrícula: {$dados['matricula']}</p>";
        }

        return '';
    }
}
?>
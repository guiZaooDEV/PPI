<?php
require_once 'model.php';

class Controller {
    private $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function cadastrar($nome, $matricula) {
        $this->model->setNome($nome);
        $this->model->setMatricula($matricula);
    }

    public function getDados() {
        return [
            'nome' => $this->model->getNome(),
            'matricula' => $this->model->getMatricula()
        ];
    }

    public function getModel() {
        return $this->model;
    }
}
?>
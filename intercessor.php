<?php

class Intercessor {

    public $id;
    public $nome;
    public $horario;
    public $telefone;
    public $data;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getHorario() {
        return $this->horario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setHorario($horario) {
        $this->horario = $horario;
    }
    
    function getTelefone() {
        return $this->telefone;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    
    function getData() {
        return $this->data;
    }

    function setData($data) {
        $this->data = $data;
    }
}
?>
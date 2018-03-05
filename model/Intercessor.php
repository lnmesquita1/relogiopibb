<?php

class Intercessor {

    private $id;
    private $nome;
    private $horario;
    private $telefone;
    private $data;
    
    function __construct($nome, $horario, $telefone, $data) {
        $this->nome = $nome;
        $this->horario = $horario;
        $this->telefone = $telefone;
        $this->data = $data;
    }

    
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
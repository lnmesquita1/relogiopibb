<?php

class Conecta {
    
    private $conexao;
    
    function __construct() {
         $this->conexao = mysqli_connect('localhost', 'root', '', 'relogio');
    }
    
    function getConexao() {       
        return $this->conexao;
    }
}

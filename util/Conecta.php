<?php

class Conecta {
    
    private $conexao;
    
    function __construct() {
         $this->conexao = mysqli_connect('localhost', 'root', 'lucas', 'relogio');
    }
    
    function getConexao() {       
        return $this->conexao;
    }
}

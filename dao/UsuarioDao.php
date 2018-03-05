<?php
require_once ("model/Usuario.php");
class UsuarioDao {
    
    private $conexao;

    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    
    function buscaUsuario($nome, $senha) {
        
    }
    
}    


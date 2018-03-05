<?php
require_once("conecta.php"); 

class UsuarioDao {
    
    private $conexao;

    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    
    function buscaUsuario($conexao, $nome, $senha) {
        $query = "select * from usuarios where nm_usuario = '{$nome}' and ds_senha = '{$senha}'";
        $resultado = mysql
    }
    
}

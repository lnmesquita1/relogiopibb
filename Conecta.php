<?php

class Conecta {
    
    function getConexao() {
        $conexao = mysqli_connect('localhost', 'root', '', 'relogio');
        return $conexao;
    }
}

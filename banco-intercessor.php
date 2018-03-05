<?php
require_once ("intercessor.php");
require_once ("Conecta.php");


function listaIntercessores() {
    $conecta = new Conecta();
    $conexao = $conecta->getConexao();
    
    $intercessores = array();
    $resultado = mysqli_query($conexao, "select * from intercessores where month(data) = MONTH(CURRENT_DATE())");

    while($intercessor_array = mysqli_fetch_assoc($resultado)) {
        $intercessor = new Intercessor();
        $intercessor->nome = $intercessor_array['nome'];
        $intercessor->horario = $intercessor_array['horario'];
        $intercessor->data = $intercessor_array['data'];
        array_push($intercessores, $intercessor);
    }

    return $intercessores;
}

function insereIntercessor($intercessor) {
    $conecta = new Conecta();
    $conexao = $conecta->getConexao();
    $query = "insert into intercessores (nome, telefone, pedido, horario, data) values ('{$intercessor->getNome()}', null, null, '{$intercessor->getHorario()}', '{$intercessor->getData()}')";
    return mysqli_query($conexao, $query);
}

function removeIntercessor($conexao, $id) {
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}

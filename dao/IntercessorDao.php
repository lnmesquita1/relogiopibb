<?php
require_once ("model/Intercessor.php");
class IntercessorDao {
    
    private $conexao;

    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    
    function listaIntercessores() {
    
    $intercessores = array();
    $resultado = mysqli_query($this->conexao, "select * from intercessores where month(data) = MONTH(CURRENT_DATE())");

    while($intercessor_array = mysqli_fetch_assoc($resultado)) {
        $nome = $intercessor_array['nome'];
        $horario = $intercessor_array['horario'];
        $data = $intercessor_array['data'];
        $intercessor = new Intercessor($nome, $horario, "", $data);
        array_push($intercessores, $intercessor);
    }

    return $intercessores;
    }

    function insereIntercessor($intercessor) {        
        $query = "insert into intercessores (nome, telefone, pedido, horario, data) values ('{$intercessor->getNome()}', null, null, '{$intercessor->getHorario()}', '{$intercessor->getData()}')";
        return mysqli_query($this->conexao, $query);
    }

    function removeIntercessor($id) {
        $query = "delete from intercessor where id = {$id}";
        return mysqli_query($this->conexao, $query);
    }
    
}


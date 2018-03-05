<?php
      include("banco-intercessor.php"); 
      //require_once ("funcoes/Mensagens.php");
      
      function carregaClasse($nomeClasse) {
    require_once ("funcoes/" . $nomeClasse . ".php");
}

spl_autoload_register("carregaClasse");
      ?>
<?php
date_default_timezone_set('America/Sao_Paulo');

$m = new Mensagens();
$nome = $_POST["postnome"];
$horario = $_POST['check_list'];

$dt = new DateTime();
$dateTimeNow = $dt->format('Y-m-d H:i:s');
$intercessor = new Intercessor();
$intercessor->setNome($nome);
$intercessor->setTelefone(NULL);
$intercessor->setData($dateTimeNow);
$texto = '';

$horariosFull = array();
if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $check) {
        $texto .= $check . ';';
        if (verificaQtdIntercessoresHorario($check) == 7 || verificaQtdIntercessoresHorario($check) > 7) {
            array_push($horariosFull, $check);
        }
    }
}    

$intercessor->setHorario($texto);

if (count($horariosFull) == 0) {
    if(insereIntercessor($intercessor)) { ?>
        <?php echo  $m->mensagemSucesso("Seu horário foi registrado.")?>
    <?php } else {
        $conecta = new Conecta();
        $conexao = $conecta->getConexao();
        $msg = mysqli_error($conexao);
        echo $m->mensagemErro("Erro ao cadastrar intercessor." . $msg);
        ?>
    <?php
    }
} else {
    echo $m->mensagemErro('Não é permitido registrar mais do que 7 pessoas no mesmo horário. <strong>' 
            . implode(", ",$horariosFull) . '.</strong>');
}

function verificaQtdIntercessoresHorario($horario) {
        $arrayIntercessores = listaIntercessores();
        $arrlength = count($arrayIntercessores);
        
        $contador = 0;
        for ($i = 0; $i < $arrlength; $i++) {
            $horarioIntercessor = $arrayIntercessores[$i]->getHorario();
            $horarios = explode(";", $horarioIntercessor);
            
            $lenghtHorarios = count($horarios);
            
            for ($j = 0; $j < $lenghtHorarios; $j++) {
                if($horarios[$j] == $horario) {
                    $contador++;
                    break;
                }
            }
        }
        
        return $contador;
}

?>

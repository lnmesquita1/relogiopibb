<?php include("cabecalho.php"); 
require_once ("util/QuadroHorariosUtil.php");
?>

<div class="coluna-ver">
    <div class="panel panel-default panel-table">
        <div class="panel-heading">
            <div class="tr">
                <div class="td"><strong>Período do dia</strong></div>
            </div>
        </div>
        <div class="panel-body">
            <?php $quadroHorarios = new QuadroHorariosUtil();
                    
                    ?>
            <?= $quadroHorarios->drawResultadoRelogio(0); ?>
        </div>

    </div>
</div>    
<div class="coluna-ver">
    <div class="panel panel-default panel-table">
        <div class="panel-heading">
            <div class="tr">
                <div class="td"><strong>Período da noite</strong></div>
            </div>
        </div>
        <div class="panel-body">            
            <?= $quadroHorarios->drawResultadoRelogio(24); ?>
        </div>

    </div>
</div>  
<?php include("rodape.php"); ?>


<div class="form-group">
    <form action="" id="formulario" method="post">  
        <?php include("mensagem-inicio.php"); ?>
        <br>
        <label for="nome">Nome completo:</label>
        <input type="text" class="form-control" id="nome" name="postnome">     
        <br>
        <label>Selecione no quadro abaixo o(s) horário(s) que você vai orar:</label>
        <p><i>(Os horários coloridos já possuem intercessores cadastrados. Isso não impede que você se cadastre no mesmo horário, mas, se possível, escolha os horários em branco. 
Nosso objetivo é termos intercessores preenchendo as 24h do dia)</i></p>
        <div id="div-quadro">
            <table id="quadro" class="table">
               <?php include("quadroHorarios.php"); ?>
            </table>
        </div>    
        <div id="result">
        </div>
        <button type="button" onclick="post()" id="enviar" class="btn btn-primary">Registrar horário</button>        
    </form>
</div>  

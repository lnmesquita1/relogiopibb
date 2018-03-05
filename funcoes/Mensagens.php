<?php

class Mensagens {
    
    function mensagemSucesso($mensagem) {
        return "<div class='alert alert-success alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
           <strong>Muito bem!</strong> " . $mensagem . "</div>";
    }
    
    function mensagemErro($mensagem) {
        return "<div class='alert alert-danger alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
           <strong>Algo deu errado!</strong> " . $mensagem . "</div>";
    }
    
}
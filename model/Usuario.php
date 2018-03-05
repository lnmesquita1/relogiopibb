<?php

class Usuario {

    private $cdUsuario;
    private $nmUsuario;
    private $dsSenha;
    
    function __construct($nmUsuario, $dsSenha) {
        $this->nmUsuario = $nmUsuario;
        $this->dsSenha = $dsSenha;
    }

    
    function getCdUsuario() {
        return $this->cdUsuario;
    }

    function getNmUsuario() {
        return $this->nmUsuario;
    }

    function getDsSenha() {
        return $this->dsSenha;
    }

    function setCdUsuario($cdUsuario) {
        $this->cdUsuario = $cdUsuario;
    }

    function setNmUsuario($nmUsuario) {
        $this->nmUsuario = $nmUsuario;
    }

    function setDsSenha($dsSenha) {
        $this->dsSenha = $dsSenha;
    }

}    


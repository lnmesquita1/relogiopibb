<?php

class Usuario {
    
    private $cdUsario;
    private $nmUsuario;
    private $dsSenha;
    
    function __construct($nmUsuario, $dsSenha) {
        $this->nmUsuario = $nmUsuario;
        $this->dsSenha = $dsSenha;
    }

    function getCdUsario() {
        return $this->cdUsario;
    }

    function getNmUsuario() {
        return $this->nmUsuario;
    }

    function getDsSenha() {
        return $this->dsSenha;
    }

    function setCdUsario($cdUsario) {
        $this->cdUsario = $cdUsario;
    }

    function setNmUsuario($nmUsuario) {
        $this->nmUsuario = $nmUsuario;
    }

    function setDsSenha($dsSenha) {
        $this->dsSenha = $dsSenha;
    }
}


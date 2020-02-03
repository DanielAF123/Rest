<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Class Departamento{
    private $codDepartamento;
    private $descDepartamento;
    private $volumenDeNegocio;
    private $fechaBajaDepartamento;
    
    public function __construct($codDepartamento, $descDepartamento, $volumenDeNegocio, $fechaBajaDepartamento){
        $this->codDepartamento=$codDepartamento;
        $this->descDepartamento=$descDepartamento;
        $this->volumenDeNegocio=$volumenDeNegocio;
        $this->fechaBajaDepartamento=null;
}
function getCodDepartamento() {
    return $this->codDepartamento;
}

function getDescDepartamento() {
    return $this->descDepartamento;
}

function getVolumenDeNegocio() {
    return $this->volumenDeNegocio;
}

function getFechaBajaDepartamento() {
    return $this->fechaBajaDepartamento;
}

function setCodDepartamento($codDepartamento) {
    $this->codDepartamento = $codDepartamento;
}

function setDescDepartamento($descDepartamento) {
    $this->descDepartamento = $descDepartamento;
}

function setVolumenDeNegocio($volumenDeNegocio) {
    $this->volumenDeNegocio = $volumenDeNegocio;
}

function setFechaBajaDepartamento($fechaBajaDepartamento) {
    $this->fechaBajaDepartamento = $fechaBajaDepartamento;
}
    public function bajaLogicaDepartamento(){
        $fecha=new DateTime();
        $parametros=[$fecha->getTimestamp(),$this->codDepartamento,];
        $resultado=DepartamentoPDO::bajaLogicaDepartamento($parametros);
    return $resultado;    
    }
    public function bajaFisicaDepartamento(){
        $parametros=[$this->codDepartamento];
        $resultado=DepartamentoPDO::bajaLogicaDepartamento($parametros);
    return $resultado;    
    }
    public function modificaDepartamento(){
        $parametros=[$this->descDepartamento, $this->codDepartamento];
        $resultado=DepartamentoPDO::bajaLogicaDepartamento($parametros);
    return $resultado;    
    }
    public function rehabilitaDepartamento(){
        $parametros=[null,$this->codDepartamento];
        $resultado=DepartamentoPDO::bajaLogicaDepartamento($parametros);
    return $resultado;    
    }
    public static function objetoDepartamento($resultado){
        $objeto=$resultado->fetchObject();
        $departamento=new Departamento($objeto->codDepartamento, $objeto->descDepartamento, $objeto->volumenDeNegocio);
        return $departamento;
    }
}

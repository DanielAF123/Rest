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
    private $fechaCreacionDepartamento;
    private $fechaBajaDepartamento;
    
    public function __construct($codDepartamento, $descDepartamento, $fechaCreacionDepartamento, $volumenDeNegocio,$fechaBajaDepartamento){
        $this->codDepartamento=$codDepartamento;
        $this->descDepartamento=$descDepartamento;
        $this->volumenDeNegocio=$volumenDeNegocio;
        $this->fechaCreacionDepartamento=$fechaCreacionDepartamento;
        $this->fechaBajaDepartamento=$fechaBajaDepartamento;
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
        DepartamentoPDO::bajaFisicaDepartamento($parametros);
     
    }
    public function modificaDepartamento($desc){
        $parametros=[$desc, $this->codDepartamento];
        $resultado=DepartamentoPDO::modificarDepartamento($parametros);
    return $resultado;    
    }
    public function rehabilitaDepartamento(){
        $parametros=[null,$this->codDepartamento];
        $resultado=DepartamentoPDO::rehabilitaDepartamento($parametros);
    return $resultado;    
    }
    public static function objetoDepartamento($resultado){
        $arrayDepartamentos=[];
        $contador=0;
        while($objeto=$resultado->fetchObject()){
            $contador++;
        $departamento=new Departamento($objeto->T02_CodDepartamento, $objeto->T02_DescDepartamento, $objeto->T02_FechaCreacionDepartamento,$objeto->T02_VolumenNegocio,$objeto->T02_FechaBajaDepartamento);
        $arrayDepartamentos[]=$departamento;
        }
        return $arrayDepartamentos;
    }
}

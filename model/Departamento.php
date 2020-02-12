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
    /**
     * 
     * @param String $codDepartamento
     * @param String $descDepartamento
     * @param DateTime $fechaCreacionDepartamento
     * @param float $volumenDeNegocio
     * @param DateTime $fechaBajaDepartamento
     */
    public function __construct($codDepartamento, $descDepartamento, $fechaCreacionDepartamento, $volumenDeNegocio,$fechaBajaDepartamento){
        $this->codDepartamento=$codDepartamento;
        $this->descDepartamento=$descDepartamento;
        $this->volumenDeNegocio=$volumenDeNegocio;
        $this->fechaCreacionDepartamento=$fechaCreacionDepartamento;
        $this->fechaBajaDepartamento=$fechaBajaDepartamento;
}
/**
 * Devuelve el codigo del departamento
 * @return String
 */
function getCodDepartamento() {
    return $this->codDepartamento;
}
/**
 * Devuelve la descripcion del departamento
 * @return String
 */
function getDescDepartamento() {
    return $this->descDepartamento;
}
/**
 * Devuelve el volumen de negocio del departamento
 * @return float
 */
function getVolumenDeNegocio() {
    return $this->volumenDeNegocio;
}
/**
 * Devuelve la fecha de baja
 * @return DateTime timestamp
 */
function getFechaBajaDepartamento() {
    return $this->fechaBajaDepartamento;
}
/**
 * Cambia el codigo de departamento
 * @param String
 */
function setCodDepartamento($codDepartamento) {
    $this->codDepartamento = $codDepartamento;
}
/**
 * Cambia la descripcion del departamento
 * @param String
 */
function setDescDepartamento($descDepartamento) {
    $this->descDepartamento = $descDepartamento;
}
/**
 * Cambia el volumen de negocio
 * @param Float
 */
function setVolumenDeNegocio($volumenDeNegocio) {
    $this->volumenDeNegocio = $volumenDeNegocio;
}
/**
 * Cambia la fecha de baja del departamento
 * @param DateTime timstamp
 */
function setFechaBajaDepartamento($fechaBajaDepartamento) {
    $this->fechaBajaDepartamento = $fechaBajaDepartamento;
}
/**
 * Realiza la baja logica del departamento
 * @return PDOstatement 
 */
    public function bajaLogicaDepartamento(){
        $fecha=new DateTime();
        $parametros=[$fecha->getTimestamp(),$this->codDepartamento,];
        $resultado=DepartamentoPDO::bajaLogicaDepartamento($parametros);
    return $resultado;    
    }
    /**
     * Elimina el departamento
     */
    public function bajaFisicaDepartamento(){
        $parametros=[$this->codDepartamento];
        DepartamentoPDO::bajaFisicaDepartamento($parametros);
     
    }
    /**
     * Modifica el departamento
     * @param String $desc
     * @return PDOstatemnt
     */
    public function modificaDepartamento($desc){
        $parametros=[$desc, $this->codDepartamento];
        $resultado=DepartamentoPDO::modificarDepartamento($parametros);
    return $resultado;    
    }
    /**
     * Rehabilita el departamento seleccionado
     * @return PDOstatement
     */
    public function rehabilitaDepartamento(){
        $parametros=[null,$this->codDepartamento];
        $resultado=DepartamentoPDO::rehabilitaDepartamento($parametros);
    return $resultado;    
    }
    /**
     * Crea un array de departamentos
     * @param un PDOstatement $resultado
     * @return array de departamentos
     */
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

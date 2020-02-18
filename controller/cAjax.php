<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(!isset($_SESSION[USUARIOA])){
    header('Location: ./view/Layout.php');
}
if(isset($_REQUEST["ajax"])){
    //Busca los departamentos
    $resultado=DepartamentoPDO::buscaDepartamentoPorDescripcionAjax($_REQUEST["busqueda"]);
    while($objeto=$resultado->fetchObject()){
        $departamento=["desc"=>$objeto->T02_DescDepartamento];
        $arrayDepartamentos[]=$departamento;
        }
        //Devuelve el json
    echo json_encode($arrayDepartamentos);
}
//Comprueba que se va a realizar el ajax para las probincias
if(isset($_REQUEST["ajaxP"])){
    $valor=$_REQUEST["busqueda"];
    //Busca las provincias
    $resultado= ProvinciaPDO::buscarProvincias($valor);
    while($objeto=$resultado->fetchObject()){
        $provincia=["nombre"=>$objeto->T03_Provincia];
        $arrayProvincias[]=$provincia;
        }
        //Devuelve el json
    echo json_encode($arrayProvincias);
}

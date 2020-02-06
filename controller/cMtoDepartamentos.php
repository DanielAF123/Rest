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
    $resultado=DepartamentoPDO::buscaDepartamentoPorDescripcionAjax($_REQUEST["busqueda"]);
    while($objeto=$resultado->fetchObject()){
        $departamento=["desc"=>$objeto->T02_DescDepartamento];
        $arrayDepartamentos[]=$departamento;
        }
    echo json_encode($arrayDepartamentos);
}
if(isset($_REQUEST["BuscarC"]) || isset($_REQUEST["buscar"])){
    $_SESSION["busqueda"]=$_REQUEST["busqueda"];
    $resultado=DepartamentoPDO::buscaDepartamentoPorCodigo($_REQUEST["busqueda"]);
    $arrayDepartamentos= Departamento::objetoDepartamento($resultado);
    $_SESSION["Departamentos"]=$arrayDepartamentos;
    header("Location: ./view/Layout.php?pagina=departamentos");
}
if(isset($_REQUEST["BuscarD"])){
    $resultado=DepartamentoPDO::buscaDepartamentoPorDescripcion($_REQUEST["busqueda"]);
    $arrayDepartamentos= Departamento::objetoDepartamento($resultado);
    $_SESSION["Departamentos"]=$arrayDepartamentos;
    header("Location: ./view/Layout.php?pagina=departamentos");
}

    //header("Location: ./view/Layout.php?pagina=departamentos");


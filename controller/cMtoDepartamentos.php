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
if(isset($_REQUEST["ajaxP"])){
    $valor=$_REQUEST["busqueda"];
    $resultado= ProvinciaPDO::buscarProvincias($valor);
    while($objeto=$resultado->fetchObject()){
        $provincia=["nombre"=>$objeto->T03_Provincia];
        $arrayProvincias[]=$provincia;
        }
    echo json_encode($arrayProvincias);
}
if(isset($_REQUEST["BuscarC"]) || isset($_REQUEST["buscar"]) || isset($_SESSION["busqueda"])){
    if(isset($_REQUEST["busqueda"])){
    $_SESSION["busqueda"]=$_REQUEST["busqueda"];
    }else{
        $_REQUEST["busqueda"]=$_SESSION["busqueda"];
    }
    $resultado=DepartamentoPDO::buscaDepartamentoPorCodigo($_REQUEST["busqueda"]);
    $arrayDepartamentos= Departamento::objetoDepartamento($resultado);
    $_SESSION["Departamentos"]=$arrayDepartamentos;
    header("Location: ./view/Layout.php?pagina=departamentos");
}
if(isset($_REQUEST["BuscarD"])){
    $_SESSION["busqueda"]=$_REQUEST["busqueda"];
    $resultado=DepartamentoPDO::buscaDepartamentoPorDescripcion($_REQUEST["busqueda"]);
    $arrayDepartamentos= Departamento::objetoDepartamento($resultado);
    $_SESSION["Departamentos"]=$arrayDepartamentos;
    header("Location: ./view/Layout.php?pagina=departamentos");
}


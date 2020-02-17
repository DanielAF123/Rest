<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(!isset($_SESSION[USUARIOA])){
    header('Location: ./view/Layout.php');
}
//Comprueba que se va a realizar el ajax
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
//Comprueba que vamos a buscar en este caso por el codigo
if(isset($_REQUEST["BuscarC"]) || isset($_REQUEST["buscar"]) || isset($_SESSION["busqueda"])){
    if(isset($_REQUEST["busqueda"])){
    $_SESSION["busqueda"]=$_REQUEST["busqueda"];
    }else{
        $_REQUEST["busqueda"]=$_SESSION["busqueda"];
    }
    $entrada=true;
    $aErrores=[];
    //Valida el campo
    $aErrores["busqueda"]= validacionFormularios::comprobarAlfaNumerico($_REQUEST["busqueda"], 3, 1, 0);
    if($aErrores["busqueda"]!=null){
        $entrada=false;
    }
    if($entrada){
        //Busca los departamentos
    $resultado=DepartamentoPDO::buscaDepartamentoPorCodigo($_REQUEST["busqueda"]);
    $arrayDepartamentos= Departamento::objetoDepartamento($resultado);
    //Los guarda en la sesion
    $_SESSION["Departamentos"]=$arrayDepartamentos;
    }else{
        $_SESSION["errores"]["errorBusqueda"]="Error en la busqueda";
    }
    header("Location: ./view/Layout.php?pagina=departamentos");
}
//Comprueba que vamos a buscar en este caso por la descripcion
if(isset($_REQUEST["BuscarD"])){
    $entrada=true;
    $aErrores=[];
    //Valida los campos
    $aErrores["busqueda"]= validacionFormularios::comprobarAlfaNumerico($_REQUEST["busqueda"], 255, 1, 0);
    if($aErrores["busqueda"]!=null){
        $entrada=false;
    }
    if($entrada){
    $_SESSION["busqueda"]=$_REQUEST["busqueda"];
    //Busca por la descripcion
    $resultado=DepartamentoPDO::buscaDepartamentoPorDescripcion($_REQUEST["busqueda"]);
    $arrayDepartamentos= Departamento::objetoDepartamento($resultado);
    //Guarda los datos por la sesion
    $_SESSION["Departamentos"]=$arrayDepartamentos;
    }else{
        $_SESSION["errores"]["errorBusqueda"]="Error en la busqueda";
    }
    header("Location: ./view/Layout.php?pagina=departamentos");
}


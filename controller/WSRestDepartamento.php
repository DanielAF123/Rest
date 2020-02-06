<?php
include_once '../model/WSRest.php';
include_once '../model/DepartamentoPDO.php';
include_once '../model/DBPDO.php';
include_once '../config/ConfDB.php';
if($_SERVER['REQUEST_METHOD']=='GET'){
    if($_GET["codigo"]){
        $resultado=WSRest::getDepartamento($_GET["codigo"]);
        while($objeto=$resultado->fetchObject()){
        $departamentoO=["codigo"=>$objeto->T02_CodDepartamento, $objeto->T02_DescDepartamento, $objeto->T02_FechaCreacionDepartamento,$objeto->T02_VolumenNegocio,$objeto->T02_FechaBajaDepartamento];
        $departamento[$objeto->T02_CodDepartamento]=$departamentoO;
        }
        if(isset($departamento)){
        echo json_encode($departamento);
        }else{
            echo json_encode(["ERROR"=>"Ningun departamento encontrado con esa busqueda"]);
        }
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST){
        $resultado=WSRest::getDepartamento($_POST["codigo"]);
        while($objeto=$resultado->fetchObject()){
        $departamentoO=["codigo"=>$objeto->T02_CodDepartamento, $objeto->T02_DescDepartamento, $objeto->T02_FechaCreacionDepartamento,$objeto->T02_VolumenNegocio,$objeto->T02_FechaBajaDepartamento];
        $departamento[$objeto->T02_CodDepartamento]=$departamentoO;
        }
        header("HTTP/1.1 200 OK");
        if(isset($departamento)){
        echo json_encode($departamento);
        }else{
            echo json_encode(["ERROR"=>"Ningun departamento encontrado con esa busqueda"]);
        }
    
    }
}


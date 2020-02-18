<?php
include_once '../model/WSRest.php';
include_once '../model/DepartamentoPDO.php';
include_once '../model/DBPDO.php';
include_once '../config/ConfDB.php';
//Comprobamos que metodo estamos usando 
if($_SERVER['REQUEST_METHOD']=='GET'){
    //Si existe el codigo ejecutamos la consulta
    if($_GET["codigo"]){
        $resultado=WSRest::getDepartamento($_GET["codigo"]);
        //Cargamos los departamentos en un json y lo devolvemos al usuario
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
//Comprobamos que metodo estamos usando 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Comprobamos que existe el array de post
    if($_POST){
        $array= json_decode($_POST["parametros"],true);
        $resultado=WSRest::getDepartamento($array["codigo"]);
        //Cargamos los departamentos en un json y lo devolvemos al usuario
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


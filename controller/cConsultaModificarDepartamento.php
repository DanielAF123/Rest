<?php
if(!isset($_SESSION[USUARIOA])){
    header('Location: ./view/Layout.php');
}
if(isset($_REQUEST["Modificar"])){
    $entrada=true;
    $aErrores=[];
    $aErrores["desc"]= validacionFormularios::comprobarAlfaNumerico($_REQUEST["desc"],255, 1, 0);
    if($aErrores["desc"]!=null){
        $entrada=false;
    }
    if($entrada){
    $resultado=DepartamentoPDO::buscaDepartamentoPorCodigo($_REQUEST["codigo"]);
    $departamento=Departamento::objetoDepartamento($resultado);
    $departamento[0]->modificaDepartamento($_REQUEST["desc"]);
    }else{
        $_SESSION["errores"]["errorDesc"]="Error en la descripcion";
        header("Location: ./view/Layout.php?pagina=modificar&codigo=".$_REQUEST["codigo"]."&desc=".$_REQUEST["desc"]."&volumen=".$_REQUEST["volumen"]."&baja=".$_REQUEST["baja"]);
    }
    if(!isset($_SESSION["errores"])){
    header("Location: ./view/Layout.php?pagina=departamentos&busqueda=a");
    }
}

<?php
if(!isset($_SESSION[USUARIOA])){
    header('Location: ./view/Layout.php');
}
if(isset($_REQUEST["Crear"])){
    $entrada=true;
    $aErrores=[];
    $aErrores["desc"]= validacionFormularios::comprobarAlfaNumerico($_REQUEST["desc"], 5, 1, 0);
    $aErrores["volumen"]= validacionFormularios::comprobarEntero($_REQUEST["volumen"], PHP_INT_MAX, 1, 0);
    $aErrores["codigo"]= validacionFormularios::comprobarAlfaNumerico($_REQUEST["codigo"], 3, 1, 0);
    foreach ($aErrores as $key => $value) {
            if($aErrores[$key]!=null){
                $entrada=false;
                $_SESSION["errores"][$key]=$aErrores[$key];
            }
        }
    if($entrada){
    $resultado=DepartamentoPDO::altaDepartamento($_REQUEST["codigo"], $_REQUEST["desc"], $_REQUEST["volumen"]);
    header("Location: ./view/Layout.php?pagina=departamentos");
    }else{
        header("Location: ./view/Layout.php?pagina=altaDepartamento");
    }
    if(!isset($_SESSION["errores"])){
    header("Location: ./view/Layout.php?pagina=departamentos&busqueda=a");
    }
}else{
    header("Location: ./view/Layout.php?pagina=altaDepartamento");
}



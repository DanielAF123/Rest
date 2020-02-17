<?php
//Comprobamos que existe la sesion
if(!isset($_SESSION[USUARIOA])){
    header('Location: ./view/Layout.php');
}
//Comprueba que hemos presionado el boton de alta
if(isset($_REQUEST["Crear"])){
    $entrada=true;
    $aErrores=[];
    //Comprobamos las validaciones
    $aErrores["desc"]= validacionFormularios::comprobarAlfaNumerico($_REQUEST["desc"], 5, 1, 0);
    $aErrores["volumen"]= validacionFormularios::comprobarEntero($_REQUEST["volumen"], PHP_INT_MAX, 1, 0);
    $aErrores["codigo"]= validacionFormularios::comprobarAlfaNumerico($_REQUEST["codigo"], 3, 1, 0);
    //Comprobamos si existen errores
    foreach ($aErrores as $key => $value) {
            if($aErrores[$key]!=null){
                $entrada=false;
                $_SESSION["errores"][$key]=$aErrores[$key];
            }
        }
        //Comprobamos si la entrada es correcta
    if($entrada){
        //Ejecutamos el alta del departamento
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



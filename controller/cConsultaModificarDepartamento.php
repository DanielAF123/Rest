<?php
//Comprobamos que existe el usuario
if(!isset($_SESSION[USUARIOA])){
    header('Location: ./view/Layout.php');
}
//Comprobamos que hemos presionado el boton de modificar
if(isset($_REQUEST["Modificar"])){
    $entrada=true;
    $aErrores=[];
    //Validamos los campos
    $aErrores["desc"]= validacionFormularios::comprobarAlfaNumerico($_REQUEST["desc"],255, 1, 0);
    //Comprobamos los errores
    if($aErrores["desc"]!=null){
        $entrada=false;
    }
    //Comprobamos la entrada
    if($entrada){
        //Realizamos la consulta
    $resultado=DepartamentoPDO::buscaDepartamentoPorCodigo($_REQUEST["codigo"]);
    //objeto de la clase departamento
    $departamento=Departamento::objetoDepartamento($resultado);
    $departamento[0]->modificaDepartamento($_REQUEST["desc"]);
    }else{
        //Cargamos los errores de la validacion
        $_SESSION["errores"]["errorDesc"]="Error en la descripcion";
        header("Location: ./view/Layout.php?pagina=modificar&codigo=".$_REQUEST["codigo"]."&desc=".$_REQUEST["desc"]."&volumen=".$_REQUEST["volumen"]."&baja=".$_REQUEST["baja"]);
    }
    if(!isset($_SESSION["errores"])){
    header("Location: ./view/Layout.php?pagina=departamentos&busqueda=a");
    }
}

<?php
if(!isset($_SESSION[USUARIOA])){
    header('Location: ./view/Layout.php');
}
if(isset($_REQUEST["buscar"])){
   if(isset($_REQUEST["nombre"])){
    $_SESSION["nombre"]=$_REQUEST["nombre"];
    }else{
        $_REQUEST["nombre"]=$_SESSION["nombre"];
    }
    $entrada=true;
    $aErrores=[];
    $aErrores["nombre"]= validacionFormularios::comprobarAlfaNumerico($_REQUEST["nombre"], 55, 1, 0);
    if($aErrores["nombre"]!=null){
        $entrada=false;
    }
    if($entrada){
        $arrayUsuarios=UsuarioPDO::buscarUsuario($_REQUEST["nombre"]);
    $_SESSION["Usuarios"]=$arrayUsuarios;
    }else{
        $_SESSION["errores"]["errorBusqueda"]="Error en la busqueda";
    }
    header("Location: ./view/Layout.php?pagina=mantenimientoUsuarios");
}
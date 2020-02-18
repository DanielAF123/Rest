<?php
if(!isset($_SESSION[USUARIOA])){
    header('Location: ./view/Layout.php');
}
if(isset($_REQUEST["buscar"])){
    $_SESSION["pagina"]="usuarios";
   if(isset($_REQUEST["nombre"])){
    $_SESSION["nombre"]=$_REQUEST["nombre"];
    }else{
        $_REQUEST["nombre"]=$_SESSION["nombre"];
    }
    $entrada=true;
    $aErrores=[];
    $aErrores["nombre"]= validacionFormularios::comprobarAlfaNumerico($_REQUEST["nombre"], 55, 0, 0);
    if($aErrores["nombre"]!=null){
        $entrada=false;
    }
    if($entrada){
        $resultado=UsuarioPDO::buscarUsuario($_REQUEST["nombre"]);
        $arrayUsuarios=[];
        while($usuario=$resultado->fetchObject()){
            $usuarioS=new Usuario($usuario->T01_CodUsuario, $usuario->T01_DescUsuario, $usuario->T01_Password, $usuario->T01_Perfil, $usuario->T01_FechaHoraUltimaConexion, $usuario->T01_NumAccesos);
            $arrayUsuarios[$usuario->T01_CodUsuario]=$usuarioS;
        }
    $_SESSION["Usuarios"]=$arrayUsuarios;
    
    }else{
        $_SESSION["errores"]["errorBusqueda"]="Error en la busqueda";
    }
    header("Location: index.php");
}
if(isset($_REQUEST["atras"])){
    unset($_SESSION["pagina"]);
    header("Location: view/Layout.php?pagina=inicio");
}
if($_REQUEST["pagina"]="mtoUsuarios"){
    require_once "./".$vista[$_REQUEST["pagina"]];
}
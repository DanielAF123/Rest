<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    //Comprueba que existe el usuario
if(isset($_SESSION[USUARIOA])){
    header('Location: ./view/Layout.php?pagina=inicio');
}
//Comprueba que recibe los datos y los valida si no nos devuelve a la anterior pagina
if(isset($_REQUEST["codUsuario"]) && isset($_REQUEST["password"])){
    $entrada=true;
    $aErrores=[];
    $aErrores['codUsuario']= validacionFormularios::comprobarNoVacio($_REQUEST['codUsuario']);
    $aErrores['codUsuario']= validacionFormularios::comprobarMaxTamanio($_REQUEST['codUsuario'],15);
    $aErrores['password']= validacionFormularios::validarPassword($_REQUEST['password'], 4, 1);
    foreach ($aErrores as $key => $value) {
        if($value!=NULL){
            $entrada=false;
        }
    }
    if(!$entrada){
        //Realiza un quiery comprobando que existe el usuario, actualizando sus datos y añadiendo el usuario a la session
    $usuario= UsuarioPDO::validarUsuario($_REQUEST["codUsuario"], $_REQUEST['password']);
    if(is_object($usuario)){
        UsuarioPDO::registrarUltimaConexion($usuario->getCodUsuario(),$usuario->getContadorAccesos());
        $contador=$usuario->getContadorAccesos()+1;
        $usuario->setContadorAccesos($contador+1);
        if($contador==1){
        $contador="Primera conexion"."<br>";
        }
        $_SESSION[USUARIOA]=$usuario;
        $_SESSION["datos"]=[$usuario->getCodUsuario(),$usuario->getDescUsuario(),$usuario->getUltimaConexion(),$contador];
        header("Location: ./view/Layout.php?pagina=inicio");
    }else{
        header("Location: ./view/Layout.php");
}
    }
}else{
    header("Location: ./view/Layout.php");
}



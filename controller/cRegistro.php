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
//Comprueba que hemos presionado enviar y valida los datos
    if(isset($_REQUEST["Enviar"])){
    $entrada=true;
    $aErrores=[];
    $aErrores['codUsuario']= validacionFormularios::comprobarNoVacio($_REQUEST['codUsuario']);
    $aErrores['desc']= validacionFormularios::comprobarNoVacio($_REQUEST['desc']);
    $aErrores['desc']= validacionFormularios::comprobarAlfaNumerico($_REQUEST['desc'], 15, 1, 1);
    $aErrores['codUsuario']= validacionFormularios::comprobarMaxTamanio($_REQUEST['codUsuario'],15);
    $aErrores['password']= validacionFormularios::comprobarMinTamanio($_REQUEST["password"], 4);
    foreach ($aErrores as $key => $value) {
        if($value!=NULL){
            $entrada=false;
        }
    }
    }else{
        $entrada=false;
    }
    //Ejecuta el query para añadir al usuario y comprobar que se añadio correctamente
    if($entrada==true){
    $r=UsuarioPDO::altaUsuario($_REQUEST["codUsuario"], $_REQUEST['desc'],$_REQUEST['password']);
    $usuario= UsuarioPDO::validarUsuario($_REQUEST["codUsuario"], $_REQUEST['password']);
    if(is_object($usuario)){
        header("Location: ./view/Layout.php");
    }else{
        header("Location: ./view/Layout.php?pagina=registro");
    }
    }else{
        header("Location: ./view/Layout.php?pagina=registro");
    }

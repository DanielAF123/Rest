<?php
include_once './model/Usuario.php';
//Inicia la sesion
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Incluye las configuraciones y ficheros necesarios
include_once './config/ConfAplicación.php';
include_once './model/UsuarioPDO.php';
include_once './config/ConfDB.php';
include_once './core/validacionFormularios.php';
//Comprueba que existe el usuario, la pagina y a que tiene que incluir
if(isset($_SESSION[USUARIOA])){
    if(isset($_REQUEST["pagina"])){
    if($_REQUEST['pagina']=="cerrar"){
        include_once './controller/cCerrarSesion.php';
    }
if($_REQUEST["pagina"]=='inicio'){
    include_once './controller/cInicio.php';
}
if($_REQUEST["pagina"]=='borrarC'){
    include_once './controller/cBorrarCuenta.php';
}
if($_REQUEST["pagina"]=='rest'){
    include_once './controller/cWSRest.php';
}
if($_REQUEST["pagina"]=="editar" || $_REQUEST["pagina"]=="contra"){
    include_once './controller/cMiCuenta.php';
}
    }
}else{
    //Si no existe el usuarion comprueba que pagina tiene que incluir y si existe la pagina
    if(isset($_REQUEST["pagina"]) && $_REQUEST["pagina"]=="registro"){
        include_once './controller/cRegistro.php';
    }else{
    include_once './controller/cLogin.php';
    }
    
}


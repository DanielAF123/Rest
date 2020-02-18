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
include_once './model/Departamento.php';
include_once './model/DepartamentoPDO.php';
include_once './model/Rest.php';
include_once './model/ProvinciaPDO.php';
//Comprueba que existe el usuario, la pagina y a que tiene que incluir
if(isset($_SESSION[USUARIOA])){
    if(isset($_SESSION["pagina"])){
        include_once "./".$controladores["mtoUsuarios"];
    }else{
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
if($_REQUEST["pagina"]=='departamentos'){
    include_once './controller/cMtoDepartamentos.php';
}
if($_REQUEST["pagina"]=='altaDepartamento'){
    include_once './controller/cAltaDepartamento.php';
}
if($_REQUEST["pagina"]=='borrarDepartamento'){
    include_once './controller/cEliminarDepartamento.php';
}
if($_REQUEST["pagina"]=='rehabilitacion'){
    include_once './controller/cRehabilitacion.php';
}
if($_REQUEST["pagina"]=='baja'){
    include_once './controller/cBaja.php';
}
if($_REQUEST["pagina"]=='modificarDepartamento'){
    include_once './controller/cConsultaModificarDepartamento.php';
}
if($_REQUEST["pagina"]=='mantenimientoUsuarios'){
    include_once './controller/cMtoUsuarios.php';
}
if($_REQUEST["pagina"]=="editar" || $_REQUEST["pagina"]=="contra"){
    include_once './controller/cMiCuenta.php';
}
    }
    if(!isset($_REQUEST["pagina"])){
    session_destroy();
    header("Location: ./index.php");
}
    }
}else{
    //Si no existe el usuarion comprueba que pagina tiene que incluir y si existe la pagina
    if(isset($_SESSION["pagina"])){
        
    }else{
    if(isset($_REQUEST["pagina"]) && $_REQUEST["pagina"]=="registro"){
        include_once './controller/cRegistro.php';
    }else{
    include_once './controller/cLogin.php';
    }
    }
}


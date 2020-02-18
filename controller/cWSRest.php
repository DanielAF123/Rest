<?php
if(!isset($_SESSION[USUARIOA])){
    header('Location: Layout.php');
}
if(isset($_SESSION["resultadoAPI"])){
    unset($_SESSION["resultadoAPI"]);
}
if(isset($_REQUEST["ids"])){
 $entrada=true;
 $aErrores=[];
}else{
    $entrada=false;
}
if($entrada){
    $resultado=Rest::consultarId($_REQUEST["numero"]);
    $_SESSION["resultadoAPI"]=json_decode($resultado,true);
    header("Location: view/Layout.php?pagina=rest");
    
}
//Realiza la validacion de campos y realizamos la peticion al rest por el metodo get
if(isset($_REQUEST["buscar"])){
 $entrada=true;
 $aErrores=[];
 $aErrores[]=validacionFormularios::comprobarNoVacio($_REQUEST["codigo"]);
}else{
    $entrada=false;
}
if($entrada){
    $resultado=Rest::consultarDatos($_REQUEST["codigo"]);
    $_SESSION["resultadoAPI"]["html"]=$resultado;
    header("Location: view/Layout.php?pagina=rest");
    
}
//Valida los campos de busqueda y realiza la busqueda por codigo con el metodo get en la api propia
if(isset($_REQUEST["bCodigo"])){
 $entrada=true;
 $aErrores=[];
 $aErrores[]=validacionFormularios::comprobarNoVacio($_REQUEST["codigo"]);
}else{
    $entrada=false;
}
if($entrada){
    $ch= curl_init();
    curl_setopt($ch,CURLOPT_URL,"http://daw202.sauces.local/proyectoDWES/proyectoTema6/aplicacionRest/controller/WSRestDepartamento.php?codigo=".$_REQUEST["codigo"]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    
    $resultado=curl_exec($ch);
    curl_close($ch);
    json_decode($resultado,true);
    $_SESSION["resultadoAPI"]["propio"]=$resultado;
    header("Location: view/Layout.php?pagina=rest");
    
}
//Valida los campos de busqueda y realiza la busqueda por codigo con el metodo post en la api propia
if(isset($_REQUEST["bCodigoP"])){
 $entrada=true;
 $aErrores=[];
 $aErrores[]=validacionFormularios::comprobarNoVacio($_REQUEST["codigo"]);
}else{
    $entrada=false;
}
if($entrada){
    $ch= curl_init();
    curl_setopt($ch,CURLOPT_URL,"http://daw202.sauces.local/proyectoDWES/proyectoTema6/aplicacionRest/controller/WSRestDepartamento.php");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    $array=["codigo"=>$_REQUEST["codigo"]];
    curl_setopt($ch, CURLOPT_POSTFIELDS, $array);
    $resultado=curl_exec($ch);
    curl_close($ch);
    json_decode($resultado,true);
    $_SESSION["resultadoAPI"]["propioP"]=$resultado;
    header("Location: view/Layout.php?pagina=rest");
    
}
    header("Location: view/Layout.php?pagina=rest");

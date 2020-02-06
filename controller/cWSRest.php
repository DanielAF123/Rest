<?php
if(!isset($_SESSION[USUARIOA])){
    header('Location: Layout.php');
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
if(isset($_REQUEST["buscar"])){
 $entrada=true;
 $aErrores=[];
 $aErrores[]=validacionFormularios::comprobarNoVacio($_REQUEST["codigo"]);
}else{
    $entrada=false;
}
if($entrada){
    $resultado=Rest::consultarDatos($_REQUEST["codigo"]);
    $_SESSION["resultadoAPI"]=$resultado;
    header("Location: view/Layout.php?pagina=rest");
    
}
    header("Location: view/Layout.php?pagina=rest");

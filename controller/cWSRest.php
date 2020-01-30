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
    $ch= curl_init();
    curl_setopt($ch,CURLOPT_URL,"https://data.europa.eu/euodp/data/apiodp/action/package_list");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    $array=["limit"=>20,"offset"=>3];
    curl_setopt($ch, CURLOPT_POSTFIELDS, $array);
    $resultado=curl_exec($ch);
    curl_close($ch);
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
    $ch= curl_init();
    curl_setopt($ch,CURLOPT_URL,"https://data.europa.eu/euodp/data/dataset/".$_REQUEST["codigo"]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    
    $resultado=curl_exec($ch);
    curl_close($ch);
    $_SESSION["resultadoAPI"]=$resultado;
    header("Location: view/Layout.php?pagina=rest");
    
}
    header("Location: view/Layout.php?pagina=rest");

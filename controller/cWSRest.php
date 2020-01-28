<?php
if(!isset($_SESSION[USUARIOA])){
    header('Location: Layout.php');
}
if(isset($_REQUEST["calcular"])){
 $entrada=true;
 $aErrores=[];
}else{
    $entrada=false;
}
if($entrada){
    $ch= curl_init();
    curl_setopt($ch,CURLOPT_URL,"https://data.europa.eu/euodp/data/dataset/cordisH2020projects");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $resultado=curl_exec($ch);
    curl_close($ch);
    echo $resultado;
    
}else{
    header("Location: ../index.php?pagina=Rest");
}
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
    //curl_setopt($ch,CURLOPT_URL,"https://data.europa.eu/euodp/data/dataset/cordisH2020projects.rdf");
    curl_setopt($ch,CURLOPT_URL,"https://data.europa.eu/euodp/data/apiodp/action/package_list");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    $array=["limit"=>20,"offset"=>3];
    $json= json_encode($array);
    //curl_setopt($ch, CURLOPT_PROTOCOLS, $json);
    $resultado=curl_exec($ch);
    curl_close($ch);
    //$xml= new SimpleXMLElement($resultado);
    /*$rdf=$xml->RDF->Description->name;
    echo $rdf;*/
    //echo $xml;
    echo $resultado;
    
}else{
    header("Location: ../index.php?pagina=Rest");
}
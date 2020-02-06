<?php
Class Rest{
    public static function consultarDatos($codigo){
    $ch= curl_init();
    curl_setopt($ch,CURLOPT_URL,"https://data.europa.eu/euodp/data/dataset/".$codigo);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    
    $resultado=curl_exec($ch);
    curl_close($ch);
    return $resultado;
    }
    public static function consultarId($numero){
    $ch= curl_init();
    curl_setopt($ch,CURLOPT_URL,"https://data.europa.eu/euodp/data/apiodp/action/package_list");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    $array=["limit"=>$numero,"offset"=>3];
    curl_setopt($ch, CURLOPT_POSTFIELDS, $array);
    $resultado=curl_exec($ch);
    curl_close($ch);
    return $resultado;
    }
    public static function idiomaTexto(){
    $ch= curl_init();
    curl_setopt($ch,CURLOPT_URL,"https://api.apitore.com/api/22/langdetect/get");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $resultado= curl_exec($ch);
    curl_close($ch);
    return $resultado;
    }
}

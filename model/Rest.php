<?php
Class Rest{
    /**
     * Recive un string con el que realizar la conulta al rest
     * @param string $codigo
     * @return html
     */
    public static function consultarDatos($codigo){
    $ch= curl_init();
    curl_setopt($ch,CURLOPT_URL,"https://data.europa.eu/euodp/data/dataset/".$codigo);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    
    $resultado=curl_exec($ch);
    curl_close($ch);
    return $resultado;
    }
    /**
     * Recibe un int y devuelve un json con los ids
     * @param int $numero
     * @return json
     */
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
    /**
     * No funciona el rest
     * @return NULL
     */
    public static function idiomaTexto(){
    $ch= curl_init();
    curl_setopt($ch,CURLOPT_URL,"https://api.apitore.com/api/22/langdetect/get");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $resultado= curl_exec($ch);
    curl_close($ch);
    return $resultado;
    }
}

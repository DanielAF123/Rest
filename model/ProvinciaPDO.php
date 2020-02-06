<?php
include_once './DBPDO.php';
Class ProvinciaPDO{
    public static function buscarProvincias($nombre){
        $sql="SELECT * FROM T03_Provincias WHERE T03_Provincia LIKE ?";
        $parametros=["%".$nombre."%"];
        $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
        return $resultado;
    }
}

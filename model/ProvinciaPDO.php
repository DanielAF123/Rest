<?php
Class ProvinciaPDO{
    public static function buscarProvincias($nombre){
        $sql="SELECT * FROM T03_Provincias WHERE T03_Id_Provincia LIKE ?";
        $parametros=[$nombre];
        $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
        return $resultado;
    }
}

<?php
Class ProvinciaPDO{
    /*
     * Permite consultar las privincias por su id
     * 
     * El parametro que tiene que recibir es un int
     * @param int Id para buscar en la base
     * @return La provincia encontrada para ese id
     */
    public static function buscarProvincias($nombre){
        $sql="SELECT * FROM T03_Provincias WHERE T03_Id_Provincia LIKE ?";
        $parametros=[$nombre];
        $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
        return $resultado;
    }
}

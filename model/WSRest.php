<?php
Class WSRest{
    /**
     * Recibe un codigo y devulve un PDOstatement
     * @param String $codigo
     * @return PDOstatemnt
     */
    public static function getDepartamento($codigo){
        $resultado=DepartamentoPDO::buscaDepartamentoPorCodigo($codigo);
        return $resultado;
    }
}

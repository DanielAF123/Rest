<?php
Class WSRest{
    public static function getDepartamento($codigo){
        $resultado=DepartamentoPDO::buscaDepartamentoPorCodigo($codigo);
        return $resultado;
    }
}

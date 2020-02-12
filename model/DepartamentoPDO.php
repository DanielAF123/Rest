<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Class DepartamentoPDO{
    /**
     * Busca un departamento por codigo
     * @param String $codigo
     * @return PDOStatement
     */
    public static function buscaDepartamentoPorCodigo($codigo){
    $sql="Select * From T02_Departamento WHERE T02_CodDepartamento LIKE ?";
    $parametros=["%".$codigo."%"];
    $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
    return $resultado;
}
/**
 * Busca un departamento por descripcion
 * @param String $desc
 * @return PDOStatement
 */
    public static function buscaDepartamentoPorDescripcion($desc){
    $sql="Select * From T02_Departamento WHERE T02_DescDepartamento LIKE ?";
    $parametros=["%".$desc."%"];
    $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
    return $resultado;
}
/**
 * Busca un departamento por descipcion unica
 * @param String $desc
 * @return PDOStatement
 */
    public static function buscaDepartamentoPorDescripcionAjax($desc){
    $sql="Select T02_DescDepartamento From T02_Departamento WHERE T02_DescDepartamento LIKE ?";
    $parametros=["%".$desc."%"];
    $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
    return $resultado;
}
/**
 * Ingresa un numero departamento
 * @param String $codigo
 * @param String $desc
 * @param Float $volumen
 * @return PDOStatement
 */
    public static function altaDepartamento($codigo,$desc,$volumen){
        $fecha=new DateTime();
    $sql="INSERT INTO T02_Departamento (T02_CodDepartamento,T02_DescDepartamento,T02_FechaCreacionDepartamento ,T02_VolumenNegocio,T02_Id) values(?,?,?,?,?)";
    $parametros=[$codigo,$desc,$fecha->getTimestamp(),$volumen,1];
    $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
    return $resultado;
}
/**
 * Recibe unos parametros y realiza la baja logica
 * @param  array con los parametros para realizar el Query $parametros
 * @return PDOStatement
 */
    public static function bajaLogicaDepartamento($parametros){
        $sql="UPDATE T02_Departamento SET T02_FechaBajaDepartamento=? WHERE T02_CodDepartamento=?";
    $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
    return $resultado;    
    }
/**
 * Recibe unos parametros y elimina el departamento
 * @param array con los parametros para realizar el Query $parametros
 * @return PDOStatement
 */
    public static function bajaFisicaDepartamento($parametros){
        $sql="DELETE FROM T02_Departamento WHERE T02_CodDepartamento=?";
    $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
    return $resultado;    
    }
    /**
     * Valida si el codigo recibido existe en la base de datos
     * @param String $codigo
     * @return PDOStatement
     */
    public static function validaCodNoExistente($codigo){
        $sql="SELECT * FROM T02_Departamento WHERE T02_CodDepartamento=?";
        $parametros=[$codigo];
        $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
        return $resultado;
    }
    /**
     * Modifica los datos del departamento recibido
     * @param array con los parametros para realizar el Query $parametros
     * @return PDOStatement
     */
    public static function modificarDepartamento($parametros){
        $sql="UPDATE T02_Departamento SET T02_DescDepartamento=? WHERE T02_CodDepartamento=?";
        $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
        return $resultado;
    }
    /**
     * Rehabilita el departamento en la base de datos
     * @param array con los parametros para realizar el Query $parametros
     * @return PDOStatement
     */
    public static function rehabilitaDepartamento($parametros){
        $sql="UPDATE T02_Departamento SET T02_FechaBajaDepartamento=? WHERE T02_CodDepartamento=?";
        $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
        return $resultado;
    }
    
}
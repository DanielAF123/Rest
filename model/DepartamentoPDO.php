<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Class DepartamentoPDO{
    public static function buscaDepartamentoPorCodigo($codigo){
    $sql="Select * From T02_Departamento WHERE T02_CodDepartamento LIKE ?";
    $parametros=["%".$codigo."%"];
    $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
    return $resultado;
}
    public static function buscaDepartamentoPorDescripcion($desc){
    $sql="Select * From T02_Departamento WHERE T02_DescDepartamento LIKE ?";
    $parametros=["%".$desc."%"];
    $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
    return $resultado;
}
    public static function altaDepartamento($codigo,$desc,$volumen){
        $fecha=new DateTime();
    $sql="INSERT INTO T02_Departamento (T02_CodDepartamento,T02_DescDepartamento,T02_FechaCreacionDepartamento ,T02_VolumenNegocio) values(?,?,?,?)";
    $parametros=[$codigo,$desc,$fecha->getTimestamp(),$volumen];
    $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
    return $resultado;
}
    public static function bajaLogicaDepartamento($parametros){
        $sql="UPDATE T02_Departamento SET T02_FechaBajaDepartamento=? WHERE T02_CodDepartamento=?";
    $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
    return $resultado;    
    }
    public static function bajaFisicaDepartamento($parametros){
        $sql="DELETE FROM T02_Departamento WHERE T02_CodDepartamento=?";
    $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
    return $resultado;    
    }
    public static function validaCodNoExistente($codigo){
        $sql="SELECT * FROM T02_Departamento WHERE T02_CodDepartamento=?";
        $parametros=[$codigo];
        $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
        return $resultado;
    }
    public static function modificarDepartamento($parametros){
        $sql="UPDATE T02_Departamento SET T02_DescDepartamento=? WHERE T02_CodDepartamento=?";
        $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
        return $resultado;
    }
    public static function rehabilitaDepartamento($parametros){
        $sql="UPDATE T02_Departamento SET T02_FechaBajaDepartamento=? WHERE T02_CodDepartamento=?";
        $resultado=DBPDO::ejecutaConsulta($sql, $parametros);
        return $resultado;
    }
    
}
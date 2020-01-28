<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DBPDO{
    /**
     * Ejecuta una consulta que recibe con los parametros recibidos
     * 
     * Los parametros tienen que ser un array
     * @param type $sql sql a ejecutar
     * @param type $parametros parametros a ejecutar
     * @return El objeto que se consigue tras ejecutar la sentencia objeto PDOStatement
     */
    public static function ejecutaConsulta($sql,$parametros){
        try{
    $miDB= new PDO(URL, USUARIO, CONTRASEÑA);
    $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (Exception $exp){
            echo $exp->getMessage();
            echo "ERROR";
        }
    try{
        $consulta=$miDB->prepare($sql);
        $consulta->execute($parametros);
    } catch (PDOException $exp) {
        $consulta=$exp->getMessage().$exp->getCode();
    }
     return $consulta;
}
}

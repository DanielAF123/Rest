<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'DBPDO.php';
class UsuarioPDO{
    /**
     * Valida si un usuario existe en la base de datos
     * @param type $codUsuario codigo de un usuario
     * @param type $password contraseña de un usuario
     * @return boolean|\Usuario boolean false si no tiene exito y un usuario si es correcta la ejecucion 
     */
    public function validarUsuario($codUsuario, $password) {
        $contraseña= hash("sha256",$codUsuario.$password);
        $resultado=DBPDO::ejecutaConsulta("Select * FROM T01_Usuario WHERE T01_Password=?",[$contraseña]);
        if($resultado->rowCount()==1){
            $usuario=$resultado->fetchObject();
            $usuarioS=new Usuario($usuario->T01_CodUsuario, $usuario->T01_DescUsuario, $usuario->T01_Password, $usuario->T01_Perfil, $usuario->T01_FechaHoraUltimaConexion, $usuario->T01_NumAccesos);
            return $usuarioS;
        }else{
            return false;
        }
    }
    /**
     * Permite registrar la ultima conexion del usuario y aumentar su contador en la base de datos
     * @param type $usuario un codigo de usuario 
     * @param type $contador el contador del usuario a modificar
     */
    public function registrarUltimaConexion($usuario,$contador){
        $fechaActual=new DateTime();
        $valor=$fechaActual->format('Y-m-d H:i:s');
        DBPDO::ejecutaConsulta("UPDATE T01_Usuario SET T01_FechaHoraUltimaConexion=?,T01_NumAccesos=? WHERE T01_CodUsuario=?", [$valor,$contador+1,$usuario]);
    }
    /**
     * Permite dar de alta a un usuario
     * @param type $codUsuario codigo del usuario
     * @param type $desc descripcion del usuario
     * @param type $password contraseña del usuario
     * @return El resultado de la ejecucion del query un int
     */
    public function altaUsuario($codUsuario,$desc,$password){
        $contraseña= hash("sha256",$codUsuario.$password);
       return DBPDO::ejecutaConsulta("INSERT INTO T01_Usuario (T01_CodUsuario, T01_DescUsuario, T01_Password) Values(?,?,?)",[$codUsuario,$desc,$contraseña]);
    }
    /**
     * Permite modificar la contraseña del usuario
     * @param type $codUsuario codigo de usuario a modificar
     * @param type $password contraseña del usuario a modificar
     * @return el resultado de la ejecucion del query un int
     */
    public function modificarContraseña($codUsuario,$password){
        $contraseña= hash("sha256",$codUsuario.$password);
        $sql="UPDATE T01_Usuario SET T01_Password=? WHERE T01_CodUsuario=?";
        return DBPDO::ejecutaConsulta($sql,[$contraseña,$codUsuario]);
    }
    /**
     * Permite modificar la descripcion del usuario
     * @param type $codUsuario codigo del usuario a modificar
     * @param type $desc descripcion del usuario a modificar
     * @return el resultado de la ejecucion del query un int
     */
    public function modificarDesc($codUsuario,$desc){
        $sql="UPDATE T01_Usuario SET T01_DescUsuario=? WHERE T01_CodUsuario=?";
        return DBPDO::ejecutaConsulta($sql,[$desc,$codUsuario]);
    }
    /**
     * Permite eliminar a un usuario de la base de datos
     * @param type $codUsuario codigo del usuario a eliminar
     * @return resultado de la ejecucion del query un int 
     */
    public function borrarUsuario($codUsuario){
        $sql="DELETE FROM T01_Usuario WHERE T01_CodUsuario=?";
        return DBPDO::ejecutaConsulta($sql,[$codUsuario]);
    }
    /**
     * Recibe un codigo o parte de el y busca los posibles usuarios
     * @param String $codUsuario
     * @return PDOStatement Resultado
     */
    public function buscarUsuario($codUsuario){
        $sql="SELECT * FROM T01_Usuario WHERE T01_CodUsuario LIKE ?";
        $resultado=DBPDO::ejecutaConsulta($sql,["%".$codUsuario."%"]);
        return $resultado;
    }
}

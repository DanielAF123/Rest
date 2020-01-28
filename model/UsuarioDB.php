<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
interface UsuarioDB{
    /**
     * Valida un usuario
     * @param type $codUsuario codigo de usuario
     * @param type $password contraseña del usuario
     */
    public function validarUsuario($codUsuario,$password);
}

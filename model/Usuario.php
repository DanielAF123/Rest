<?php
class Usuario{
    private $codUsuario;
    private $descUsuario;
    private $password;
    private $perfil;
    private $ultimaConexion;
    private $contadorAccesos;
    /**
     * Constructor de la clase Usuario
     * @param type $codUsuario
     * @param type $descUsuario
     * @param type $password
     * @param type $perfil
     * @param type $ultimaConexion
     * @param type $contadorAccesos
     */
    public function __construct($codUsuario,$descUsuario,$password,$perfil,$ultimaConexion,$contadorAccesos) {
        $this->codUsuario=$codUsuario;
        $this->descUsuario=$descUsuario;
        $this->password=$password;
        $this->perfil=$perfil;
        $this->ultimaConexion=$ultimaConexion;
        $this->contadorAccesos=$contadorAccesos;
    }
    /**
     * Devuelve el codigo de usuario
     * @return CodUsuario
     */
    function getCodUsuario() {
        return $this->codUsuario;
    }
    /**
     * Devuelve la descripcion de usuario
     * @return descUsuario
     */
    function getDescUsuario() {
        return $this->descUsuario;
    }
    /**
     * Devuelve la contraseña de usuario
     * @return password
     */
    function getPassword() {
        return $this->password;
    }
    /**
     * Devuelve el perfil de usuario
     * @return CodUsuario
     */
    function getPerfil() {
        return $this->perfil;
    }
    /**
     * Devuelve la ultima conexion de usuario
     * @return ultimaConexion
     */
    function getUltimaConexion() {
        return $this->ultimaConexion;
    }
    /**
     * Devuelve el contador de accesos de usuario
     * @return contadorAccesos
     */
    function getContadorAccesos() {
        return $this->contadorAccesos;
    }
    /**
     * Cambia el codUsuario
     * @param codUsuario
     * @return void
     */
    function setCodUsuario($codUsuario) {
        $this->codUsuario = $codUsuario;
    }
    /**
     * Cambia el descUsuario
     * @param descUsuario
     * @return void
     */
    function setDescUsuario($descUsuario) {
        $this->descUsuario = $descUsuario;
    }
    /**
     * Cambia el password
     * @param password
     * @return void
     */
    function setPassword($password) {
        $this->password = $password;
    }
    /**
     * Cambia el perfil
     * @param perfil
     * @return void
     */
    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }
    /**
     * Cambia el ultimaConexion
     * @param ultimaConexion
     * @return void
     */
    function setUltimaConexion($ultimaConexion) {
        $this->ultimaConexion = $ultimaConexion;
    }
    /**
     * Cambia el contadorAccesos
     * @param contadorAccesos
     * @return void
     */
    function setContadorAccesos($contadorAccesos) {
        $this->contadorAccesos = $contadorAccesos;
    }


}

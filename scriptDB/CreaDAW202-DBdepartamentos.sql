/**
 * Author:  David Garcia
 * Created: 26-nov-2019
 */
-- Cambiar nombre de la base de datos y el de usuario --
-- ProyectoTema5 || LoginLogoffTema5 || MtoDepartamentosPDOTema5 --

-- Crear base de datos --
    CREATE DATABASE if NOT EXISTS DAW202LoginLogoutPOO;
-- Uso de la base de datos. --
    USE DAW202LoginLogoutPOO;

-- Crear tablas. --
CREATE TABLE `T03_Provincias` (
  `T03_Id` int(11) NOT NULL,
  `T03_Id_Provincia` smallint(6) DEFAULT NULL,
  `T03_Provincia` varchar(30) DEFAULT NULL,
PRIMARY KEY (T03_Id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `T03_Provincias`
  MODIFY `T03_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
    CREATE TABLE IF NOT EXISTS T02_Departamento(
        T02_CodDepartamento varchar(3) PRIMARY KEY,
        T02_DescDepartamento varchar(255) NOT null,
        T02_FechaBajaDepartamento int DEFAULT null, -- Valor por defecto null, ya que cuando lo creas no puede estar de baja logica
        T02_FechaCreacionDepartamento int NOT null,
        T02_VolumenNegocio float NOT null,
        T02_Id int(11) NOT null,
         FOREIGN KEY (T02_Id) REFERENCES T03_Provincias(T03_Id)
    );

    CREATE TABLE IF NOT EXISTS T01_Usuario(
        T01_CodUsuario varchar(15) PRIMARY KEY,
        T01_DescUsuario varchar(250) NOT null,
        T01_Password varchar(64) NOT null,
        T01_NumAccesos INTEGER(10) default 0,
        T01_Perfil enum('administrador', 'usuario') default 'usuario', -- Valor por defecto usuario
        T01_FechaHoraUltimaConexion timestamp --Revisar o cambiar a int--
    );

-- Crear del usuario --
    CREATE USER IF NOT EXISTS 'usuarioDAW202LoginLogoutPOO'@'%' identified BY 'paso'; 

-- Dar permisos al usuario --
    GRANT ALL PRIVILEGES ON DAW202LoginLogoutPOO.* TO 'usuarioDAW202LoginLogoutPOO'@'%'; 

-- Hacer el flush privileges, por si acaso --
    FLUSH PRIVILEGES;
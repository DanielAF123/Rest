/**
 * Author:  daw2
 * Created: 26-nov-2019
 */
-- La contraseña de los usuarios, es el codUsuario concatenado con el password, en este caso paso. [$usuario . $pass]
-- Base de datos a usar
USE DAW202LoginLogoutPOO;

-- Introduccion de datos dentro de la tabla creada
INSERT INTO T02_Departamento(T02_CodDepartamento,T02_DescDepartamento,T02_FechaCreacionDepartamento, T02_VolumenNegocio,T02_Id) VALUES
    ('INF', 'Departamento de informatica',1574772123, 50,1),
    ('VEN', 'Departamento de ventas',1574772123, 800000,12),
    ('CON', 'Departamento de contabilidad',1574772123, 900000,14),
    ('MAT', 'Departamento de matematicas',1574772123, 80000000,10),
    ('CAT', 'Departamento de gatos',1574772123, 12584631268,45);
-- 1574772123 -> 26-nov-2019 ~13:45 --

-- El tipo de usuario es "usuario" como predeterminado, despues añado un admin --
INSERT INTO T01_Usuario(T01_CodUsuario, T01_DescUsuario, T01_Password) VALUES
    ('daniel','daniel',SHA2('danielpaso',256)),
    ('nereaA','nereaA',SHA2('nereaApaso',256)),
    ('miguel','miguel',SHA2('miguelpaso',256)),
    ('alex','alex',SHA2('alexpaso',256)),
    ('david','david',SHA2('davidpaso',256)),
    ('ismael','ismael',SHA2('ismaelpaso',256)),
    ('victor','victor',SHA2('victorpaso',256)),
    ('bea','bea',SHA2('beapaso',256)),
    ('nereaN','nereaN',SHA2('nereaNpaso',256)),
    ('mateo','mateo',SHA2('mateopaso',256)),
    ('rodrigo','rodrigo',SHA2('rodrigopaso',256)),
    ('ruben','ruben',SHA2('rubenpaso',256)),
    ('heraclio','heraclio',SHA2('heracliopaso',256)),
    ('amor','amor',SHA2('amorpaso',256)),
    ('maria','maria',SHA2('mariapaso',256)),
    ('antonio','antonio',SHA2('antoniopaso',256))
;

-- Usuario con el rol admin --
INSERT INTO T01_Usuario(T01_CodUsuario, T01_DescUsuario, T01_Password, T01_Perfil) VALUES ('admin','admin',SHA2('adminpaso',256), 'administrador');
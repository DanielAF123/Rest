<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="../webroot/css/css.css">
    </head>
    <body>
        <?php
        include_once '../config/ConfAplicación.php';
        include_once '../model/Usuario.php';
        //Comprueba que existe una sesion abierta de un usuario
        if(isset($_SESSION[USUARIOA])){
            //Comprueba que existe una pagina a la que incluir y a que pagina incluir
            if(isset($_REQUEST["pagina"])){
            if($_REQUEST["pagina"]=="inicio"){
                include_once './vInicio.php';
            }
            if($_REQUEST["pagina"]=="editar"){
                include_once './vMiCuenta.php';
            }
            if($_REQUEST["pagina"]=="borrarC"){
                include_once './vBorrarCuenta.php';
            }
            if($_REQUEST["pagina"]=="rest"){
                include_once './vWSRest.php';
            }
            if($_REQUEST["pagina"]=="departamentos"){
                include_once './vMtoDepartamentos.php';
            }
            }
        }else{
            //Si no existe el usuario en la sesion comprueba a que pagina tiene que incluir dependidendo de que variables reciba 
            if(isset($_REQUEST["pagina"])){
            if($_REQUEST["pagina"]=="registro"){
                include_once './vRegistro.php';
            }
            }else{
            include_once './vlogin.php';
            }
        }
    ?>
        <footer> 
            <a href="../doc/documentacion/html/index.html" target="_blank">Documentación</a>
            <a href="../doc/Tema2.pdf" target="_black">Herramientas utilizadas</a>
            <a href="../../../../../">Daniel Alcala Fernandez</a><a target="_blank" href="https://github.com/DanielAF123/LoginLogoutMulticapaPOO">GitLab</a>
        </footer>
    </body>
</html>


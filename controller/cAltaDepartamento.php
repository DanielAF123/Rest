<?php
if(!isset($_SESSION[USUARIOA])){
    header('Location: ./view/Layout.php');
}
if(isset($_REQUEST["Crear"])){
    $resultado=DepartamentoPDO::altaDepartamento($_REQUEST["codigo"], $_REQUEST["desc"], $_REQUEST["volumen"]);
    header("Location: ./view/Layout.php?pagina=departamentos");
    
}else{
    header("Location: ./view/Layout.php?pagina=altaDepartamento");
}



<?php
if(!isset($_SESSION[USUARIOA])){
    header('Location: ./view/Layout.php');
}
if(isset($_REQUEST["Modificar"])){
    $resultado=DepartamentoPDO::buscaDepartamentoPorCodigo($_REQUEST["codigo"]);
    $departamento=Departamento::objetoDepartamento($resultado);
    $departamento[0]->modificaDepartamento($_REQUEST["desc"]);
    header("Location: ./view/Layout.php?pagina=departamentos&busqueda=a");
}

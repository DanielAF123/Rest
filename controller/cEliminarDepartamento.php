<?php
if(!isset($_SESSION[USUARIOA])){
    header('Location: ./view/Layout.php');
}
if(isset($_REQUEST["Eliminar"])){
    $resultado=DepartamentoPDO::buscaDepartamentoPorCodigo($_REQUEST["codigo"]);
    $objeto=Departamento::objetoDepartamento($resultado);
    var_dump($objeto);
    $objeto[0]->bajaFisicaDepartamento();
    header("Location: ./view/Layout.php?pagina=departamentos&busqueda=a");
}


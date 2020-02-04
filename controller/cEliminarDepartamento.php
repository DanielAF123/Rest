<?php
if(!isset($_SESSION[USUARIOA])){
    header('Location: ./view/Layout.php');
}
echo 'paso';
if(isset($_REQUEST["Eliminar"])){
    $resultado=DepartamentoPDO::buscaDepartamentoPorCodigo($_REQUEST["codigo"]);
    echo 'paso';
    $objeto=Departamento::objetoDepartamento($resultado);
    var_dump($objeto);
    $objeto->bajaFisicaDepartamento();
    echo "sin error";
    //header("Location= ./view/Layout.php?pagina=departamentos");
}


<?php
if(!isset($_SESSION[USUARIOA])){
    header('Location: ./view/Layout.php');
}
$resultado=DepartamentoPDO::buscaDepartamentoPorCodigo($_REQUEST["codigo"]);
$departamento= Departamento::objetoDepartamento($resultado);
$departamento[0]->bajaLogicaDepartamento();
header("Location: ./view/Layout.php?pagina=departamentos&busqueda=a");

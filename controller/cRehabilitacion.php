<?php
if(!isset($_SESSION[USUARIOA])){
    header('Location: ./view/Layout.php');
}
//busca el departamento
$resultado=DepartamentoPDO::buscaDepartamentoPorCodigo($_REQUEST["codigo"]);
//Crea el objeto departamento
$departamento= Departamento::objetoDepartamento($resultado);
//realiza la rehabilitacion
$departamento[0]->rehabilitaDepartamento();
header("Location: ./view/Layout.php?pagina=departamentos&busqueda=a");

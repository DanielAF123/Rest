<?php
if(!isset($_SESSION[USUARIOA])){
    header('Location: ./view/Layout.php');
}
//Si hemos presionado el boton eliminar entra
if(isset($_REQUEST["Eliminar"])){
    //Realizamos la busqueda del codigo
    $resultado=DepartamentoPDO::buscaDepartamentoPorCodigo($_REQUEST["codigo"]);
    //Creamos el departamento
    $objeto=Departamento::objetoDepartamento($resultado);
    //Hacemos la baja fisica
    $objeto[0]->bajaFisicaDepartamento();
    header("Location: ./view/Layout.php?pagina=departamentos&busqueda=a");
}


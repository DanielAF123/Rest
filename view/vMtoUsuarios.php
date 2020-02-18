<html>
    <head>
      <link href="webroot/css/css.css" rel="stylesheet" type="text/css"/>
    <link href="webroot/css/cssEditar.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <label for="nombre">Codigo Usuario</label><br>
    <input class="input" type="text" name="nombre" id="nombre">
    <input class="Button" type="submit" value="Buscar Nombre" name="buscar" id="buscar">
</form>
<table class="texto"> 
    <tr> 
        <th>Codigo Usuario</th>
        <th>Descripción</th>
        <th>Perfil</th>
        <th>Ultima conexión</th>
        <th>Contador accesos</th>
        <th>Botones</th>
    </tr>
    <?php
    if(isset($_SESSION["Usuarios"])){
    foreach ($_SESSION["Usuarios"] as $key => $value) { 
 ?>
    <tr> 
        <td><?php echo $value->getCodUsuario(); ?></td>
        <td><?php echo $value->getDescUsuario(); ?></td>
        <td><?php echo $value->getPerfil(); ?></td>
        <td><?php echo $value->getUltimaConexion(); ?></td>
        <td><?php echo $value->getContadorAccesos(); ?></td>
        <td> 
            <input class="Button" type="button" value="Visualizar">
            <input class="Button" type="button" value="Modificar">
            <input class="Button" type="button" value="Eliminar">
        </td>
    </tr>
    <?php }}
            if(isset($_SESSION["errores"])){
            echo $_SESSION["errores"]["errorBusqueda"];
            unset($_SESSION["errores"]);
            }
            ?>
</table>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <input class="Button" type="submit" value="Atras" name="atras">
</form>
<?php 
/*botones
 * <input type="button" value="Visualizar"  onclick="location='./Layout.php?pagina=visualizar&codigo=<?php echo $value->getCodDepartamento();?>&desc=<?php echo $value->getDescDepartamento();?>&volumen=<?php echo $value->getVolumenDeNegocio();?>&baja=<?php echo $value->getFechaBajaDepartamento();?>'">
                <input type="button" value="Modificar"  onclick="location='./Layout.php?pagina=modificar&codigo=<?php echo $value->getCodDepartamento();?>&desc=<?php echo $value->getDescDepartamento();?>&volumen=<?php echo $value->getVolumenDeNegocio();?>&baja=<?php echo $value->getFechaBajaDepartamento();?>&modificarDepartamento=modifica'">
                <input type="button" value="Eliminar" onclick="location='./Layout.php?pagina=borrarDepartamento&codigo=<?php echo $value->getCodDepartamento();?>'">
 */
?>
    </body>
</html>

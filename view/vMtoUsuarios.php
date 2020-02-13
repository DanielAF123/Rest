<button onclick="location='./Layout.php?pagina=inicio'">Atras</button>
<form action="../index.php?pagina=mantenimientoUsuarios" method="POST">
    <label for="nombre">Nombre</label><br>
    <input type="text" name="nombre" id="nombre">
    <input type="submit" value="Buscar Nombre" name="buscar" id="buscar">
</form>
<table> 
    <tr> 
        <th>Codigo Usuario</th>
        <th>Descripción</th>
        <th>Perfil</th>
        <th>Ultima conexión</th>
        <th>Contador accesos</th>
        <th>Botones</th>
    </tr>
    <?php
    foreach ($_SESSION["Usuarios"] as $key => $value) { 
 ?>
    <tr> 
        <td><?php echo $value->getCodUsuario(); ?></td>
        <td><?php echo $value->getDescUsuario(); ?></td>
        <td><?php echo $value->getPerfil(); ?></td>
        <td><?php echo $value->getUltimaConexion(); ?></td>
        <td><?php echo $value->getContadorAccesos(); ?></td>
        <td> 
                <input type="button" value="Visualizar"  onclick="location='./Layout.php?pagina=visualizar&codigo=<?php echo $value->getCodDepartamento();?>&desc=<?php echo $value->getDescDepartamento();?>&volumen=<?php echo $value->getVolumenDeNegocio();?>&baja=<?php echo $value->getFechaBajaDepartamento();?>'">
                <input type="button" value="Modificar"  onclick="location='./Layout.php?pagina=modificar&codigo=<?php echo $value->getCodDepartamento();?>&desc=<?php echo $value->getDescDepartamento();?>&volumen=<?php echo $value->getVolumenDeNegocio();?>&baja=<?php echo $value->getFechaBajaDepartamento();?>&modificarDepartamento=modifica'">
                <input type="button" value="Eliminar" onclick="location='./Layout.php?pagina=borrarDepartamento&codigo=<?php echo $value->getCodDepartamento();?>'">
        </td>
    </tr>
            <?php }
            if(isset($_SESSION["errores"])){
            echo $_SESSION["errores"]["errorBusqueda"];
            unset($_SESSION["errores"]);
            }
            ?>
</table>
<button onclick="location='./Layout.php?pagina=inicio'">Atras</button>
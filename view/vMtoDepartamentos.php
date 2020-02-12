<?php
if(isset($_REQUEST["buscar"])){
    echo "buscar";
    header("Location: ../index.php?pagina=departamentos&buscar=departamentos");
}
if(isset($_REQUEST["busqueda"])){
    $_REQUEST["busqueda"]=$_SESSION["busqueda"];
    header("Location: ../index.php?pagina=departamentos&buscar=departamentos&busqueda=".$_REQUEST["busqueda"]);
}
?>
<form action="../index.php?pagina=departamentos" method="POST">
    <input type="text" name="busqueda" id="busqueda" autocomplete="off">
    <input type="submit" value="Buscar por descripcion" name="BuscarD">
    <input type="submit" value="Buscar por codigo" name="BuscarC">
</form>
<p id="departamentos"></p>
<button onclick="location='Layout.php?pagina=altaDepartamento'">Alta departamento</button>
<label for="provincia">Codigo Postal</label>
<input type="number" name="provincia" id="provincia" max="5">
<input type="text" disabled name="provincias" id="provincias">
<table> 
    <tr> 
        <th>Codigo</th>
        <th>Descripción</th>
        <th>Fecha Baja</th>
        <th>Volumen negocio</th>
        <th>Botones</th>
    </tr>
    <?php
    foreach ($_SESSION["Departamentos"] as $key => $value) { 
 ?>
    <tr> 
        <td><?php echo $value->getCodDepartamento(); ?></td>
        <td><?php echo $value->getDescDepartamento(); ?></td>
        <td><?php echo $value->getFechaBajaDepartamento(); ?></td>
        <td><?php echo $value->getVolumenDeNegocio(); ?></td>
        <td> 
          <input type="button" value="Rehabilitacion"  onclick="location='../index.php?pagina=rehabilitacion&codigo=<?php echo $value->getCodDepartamento();?>'">
                <input type="button" value="Baja"  onclick="location='../index.php?pagina=baja&codigo=<?php echo $value->getCodDepartamento();?>'">
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
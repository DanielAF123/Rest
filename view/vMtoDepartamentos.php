<form action="../index.php?pagina=departamentos" method="POST">
    <input type="text" name="busqueda" id="busqueda">
    <input type="submit" value="Buscar por descripcion" name="BuscarD">
    <input type="submit" value="Buscar por codigo" name="BuscarC">
</form>
<button onclick="location='Layout.php?pagina=altaDepartamento'">Alta departamento</button>
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
          <input type="button" value="Rehabilitacion"  onclick="location='RehabilitacionDepartamento.php?codigo=<?php echo $resultados->CodDepartamento;?>'">
                <input type="button" value="Baja"  onclick="location='BajaLogicaDepartamento.php?codigo=<?php echo $resultados->CodDepartamento;?>'">
                <input type="button" value="Visualizar"  onclick="location='MostrarDepartamento.php?codigo=<?php echo $resultados->CodDepartamento;?>'">
                <input type="button" value="Modificar"  onclick="location='ModificarDepartamento.php?codigo=<?php echo $resultados->CodDepartamento;?>'">
                <input type="button" value="Eliminar" onclick="location='BorrarDepartamento.php?codigo=<?php echo $resultados->CodDepartamento;?>'">
        </td>
    </tr>
            <?php }
            ?>
</table>
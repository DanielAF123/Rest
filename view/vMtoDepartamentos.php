<form action="../index.php?pagina=departamentos" method="POST">
    <input type="text" name="busqueda" id="busqueda">
    <input type="submit" value="Buscar">
</form>
<table> 
    <tr> 
        <th>Codigo</th>
        <th>Descripción</th>
        <th>Fecha Baja</th>
        <th>Volumen negocio</th>
        <th>Botones</th>
    </tr>
    <tr> 
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td> 
          <input type="button" value="Rehabilitacion"  onclick="location='RehabilitacionDepartamento.php?codigo=<?php echo $resultados->CodDepartamento;?>'">
                <input type="button" value="Baja"  onclick="location='BajaLogicaDepartamento.php?codigo=<?php echo $resultados->CodDepartamento;?>'">
                <input type="button" value="Visualizar"  onclick="location='MostrarDepartamento.php?codigo=<?php echo $resultados->CodDepartamento;?>'">
                <input type="button" value="Modificar"  onclick="location='ModificarDepartamento.php?codigo=<?php echo $resultados->CodDepartamento;?>'">
                <input type="button" value="Eliminar" onclick="location='BorrarDepartamento.php?codigo=<?php echo $resultados->CodDepartamento;?>'">
        </td>
    </tr>
</table>
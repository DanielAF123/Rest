<form action="../index.php?pagina=borrarDepartamento" method="POST">
    <input type="hidden" name="codigo" id="codigo"  value="<?php echo $_REQUEST["codigo"]?>">
    <input type="submit" value="Eliminar" name="Eliminar">
</form>
<button onclick="location=' ./Layout.php?pagina=departamentos'">Atras</button>


<form action="../index.php?pagina=borrarDepartamento" method="POST">
    <input type="hidden" name="codigo" id="codigo"  value="<?php echo $_REQUEST["codigo"]?>">
    <input class="Button" type="submit" value="Eliminar" name="Eliminar">
</form>
<button class="Button" onclick="location=' ./Layout.php?pagina=departamentos'">Atras</button>


<form action="../index.php?pagina=modificarDepartamento" method="POST">
    <label for="codigo">Codigo</label>
    <input type="text" name="codigo" id="codigo" disabled value="<?php echo $_REQUEST["codigo"];?>">
    <input type="hidden" name="codigo" id="codigo" disabled value="<?php echo $_REQUEST["codigo"];?>">
    <label for="desc">descripcion departamento</label>
    <input type="text" name="desc" id="desc" value="<?php echo $_REQUEST["desc"];?>">
    <label for="volumen">Volumen departamento</label>
    <input type="text" name="volumen" id="volumen" disabled value="<?php echo $_REQUEST["volumen"];?>">
    <label for="baja">Baja departamento</label>
    <input type="text" name="baja" id="baja" disabled value="<?php echo $_REQUEST["baja"];?>">
    <?php if(isset($_REQUEST["modificarDepartamento"]) && $_REQUEST["modificarDepartamento"]){
        ?><input type="submit" value="Modificar" name="Modificar"><?php
    }
        ?>
</form>
<button onclick="location=' ./Layout.php?pagina=departamentos'">Atras</button>


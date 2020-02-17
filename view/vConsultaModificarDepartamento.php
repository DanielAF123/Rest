<form action="../index.php?pagina=modificarDepartamento" method="POST">
    <label for="codigo">Codigo</label>
    <input class="input" type="text" name="codigo1" id="codigo1" disabled value="<?php echo $_REQUEST["codigo"];?>">
    <input type="hidden" name="codigo" id="codigo" value="<?php echo $_REQUEST["codigo"];?>">
    <label for="desc">descripcion departamento</label>
    <input class="input" type="text" name="desc" id="desc" value="<?php echo $_REQUEST["desc"];?>">
    <label for="volumen">Volumen departamento</label>
    <input class="input" type="text" name="volumen" id="volumen" disabled value="<?php echo $_REQUEST["volumen"];?>">
    <label for="baja">Baja departamento</label>
    <input class="input" type="text" name="baja" id="baja" disabled value="<?php echo $_REQUEST["baja"];?>">
    <?php if(isset($_REQUEST["modificarDepartamento"]) && $_REQUEST["modificarDepartamento"]){
        ?><input class="Button" type="submit" value="Modificar" name="Modificar"><?php
    }
        ?>
</form>
<?php
    if(isset($_SESSION["errores"])){
        echo $_SESSION["errores"]["errorDesc"];
        unset($_SESSION["errores"]);
    }
?>
<button class="Button" onclick="location=' ./Layout.php?pagina=departamentos'">Atras</button>


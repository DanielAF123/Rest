<form action="../index.php?pagina=altaDepartamento" method="POST">
    <label for="codigo">codigo departamento</label>
    <input type="text" name="codigo" id="codigo">
    <label for="desc">descripción departamento</label>
    <input type="text" name="desc" id="desc">
    <label for="volumen">volumen departamento</label>
    <input type="text" name="volumen" id="volumen">
    <input type="submit" value="Crear" name="Crear">
</form>
<?php
if(isset($_SESSION["errores"])){
    foreach ($_SESSION["errores"] as $key => $value) {
        echo $key." ".$_SESSION["errores"][$key]."<br>";
    }
    unset($_SESSION["errores"]);
}
?>
<button onclick="location='./Layout.php?pagina=departamentos'">Atras</button>

<form action="../index.php?pagina=registro" method="POST" enctype="multipart/form-data" name="Formulario">
    <label for="codUsuario">usuario</label>
    <input class="input" type="text" name="codUsuario" id="codUsuario">
    <label for="desc">Descipcion usuario</label>
    <input class="input" type="text" name="desc" id="desc">
    <label for="password">Contraseña</label>
    <input class="input" type="password" name="password" id="password">
    <input class="Button" type="submit" value="Enviar" name="Enviar">
    <input class="Button" type="button" name="atras" value="atras" onclick="location='Layout.php?login=login'">
</form>
<?php
if(isset($_SESSION["errores"])){
foreach ($_SESSION["errores"] as $key => $value) {
 echo $key."  ".$_SESSION["errores"][$key];   
}
}

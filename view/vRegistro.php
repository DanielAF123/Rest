<form action="../index.php?pagina=registro" method="POST" enctype="multipart/form-data" name="Formulario">
    <label for="usuario">usuario</label>
    <input type="text" name="codUsuario" id="usuario">
    <label for="desc">Descipcion usuario</label>
    <input type="text" name="desc" id="desc">
    <label for="contrasena">Contraseña</label>
    <input type="password" name="password" id="contrasena">
    <input type="submit" value="Enviar" name="Enviar">
    <input type="button" name="atras" value="atras" onclick="location='Layout.php?login=login'">
</form>
<?php


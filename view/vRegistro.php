<form action="../index.php?pagina=registro" method="POST" enctype="multipart/form-data" name="Formulario">
    <label for="usuario">usuario</label>
    <input class="input" type="text" name="codUsuario" id="usuario">
    <label for="desc">Descipcion usuario</label>
    <input class="input" type="text" name="desc" id="desc">
    <label for="contrasena">Contraseña</label>
    <input class="input" type="password" name="password" id="contrasena">
    <input class="Button" type="submit" value="Enviar" name="Enviar">
    <input class="Button" type="button" name="atras" value="atras" onclick="location='Layout.php?login=login'">
</form>
<?php


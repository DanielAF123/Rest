<div>
<form action="../index.php?pagina=editar" method="POST" enctype="multipart/form-data" name="Formulario">
    <label for="codUsuario2">usuario</label>
    <input class="input" type="text" name="codUsuario" id="codUsuario" disabled value="<?php echo $_SESSION['datos'][0]?>">
    <input class="input" type="hidden" name="codUsuario2" id="codUsuario2" value="<?php echo $_SESSION['datos'][0]?>">
    <label for="desc">Descipcion usuario</label>
    <input class="input" type="text" name="desc" id="desc" value="<?php echo $_SESSION['datos'][1]?>">
    <input class="Button" type="submit" value="Enviar" name="Enviar">
</form>
</div>
<div>
    <form action="../index.php?pagina=contra" method="POST">
    <input type="hidden" name="codUsuario2" id="codUsuario2" value="<?php echo $_SESSION['datos'][0]?>">
    <label for="contraA">Contraseña antigua</label>
    <input class="input" type="password" name="contraA" id="contraA">
    <label for="contra1">Contraseña Nueva</label>
    <input class="input" type="password" name="contra1" id="contra1">
    <label for="contra2">Repita la contraseña</label>
    <input class="input" type="password" name="contra2" id="contra2">
    <input class="Button" type="submit" value="Enviar" name="CambiarContraseña">
    <input class="Button" type="button" onclick="location='Layout.php?pagina=borrarC'" value="Borrar Usuario">
</form>
    <button class="Button" onclick="location='./Layout.php?pagina=inicio'">Atras</button>
    </div>


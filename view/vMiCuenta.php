<div>
<form action="../index.php?pagina=editar" method="POST" enctype="multipart/form-data" name="Formulario">
    <label for="codUsuario2">usuario</label>
    <input type="text" name="codUsuario" id="codUsuario" disabled value="<?php echo $_SESSION['datos'][0]?>">
    <input type="hidden" name="codUsuario2" id="codUsuario2" value="<?php echo $_SESSION['datos'][0]?>">
    <label for="desc">Descipcion usuario</label>
    <input type="text" name="desc" id="desc" value="<?php echo $_SESSION['datos'][1]?>">
    <input type="submit" value="Enviar" name="Enviar">
</form>
</div>
<div>
    <form action="../index.php?pagina=contra" method="POST">
    <input type="hidden" name="codUsuario2" id="codUsuario2" value="<?php echo $_SESSION['datos'][0]?>">
    <label for="contraA">Contraseña antigua</label>
    <input type="password" name="contraA" id="contraA">
    <label for="contra1">Contraseña Nueva</label>
    <input type="password" name="contra1" id="contra1">
    <label for="contra2">Repita la contraseña</label>
    <input type="password" name="contra2" id="contra2">
    <input type="submit" value="Enviar" name="CambiarContraseña">
    <input type="button" onclick="location='../index.php?pagina=inicio'" value="Atras">
    <input type="button" onclick="location='Layout.php?pagina=borrarC'" value="Borrar Usuario">
</form>
    </div>


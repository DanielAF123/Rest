<div id="divE">
<form action="../index.php?pagina=editar" method="POST" enctype="multipart/form-data" name="Formulario">
    <div>
    <label for="codUsuario2">usuario</label>
    <input class="input" type="text" name="codUsuario" id="codUsuario" disabled value="<?php echo $_SESSION['datos'][0]?>">
    <input class="input" type="hidden" name="codUsuario2" id="codUsuario2" value="<?php echo $_SESSION['datos'][0]?>">
    </div>
    <div>
    <label for="desc">Descipcion usuario</label>
    <input class="input" type="text" name="desc" id="desc" value="<?php echo $_SESSION['datos'][1]?>">
    </div>
    <input class="Button" type="submit" value="Enviar" name="Enviar">
</form>
</div>
<div id="divC">
    <form action="../index.php?pagina=contra" method="POST">
        <div>
    <input type="hidden" name="codUsuario2" id="codUsuario2" value="<?php echo $_SESSION['datos'][0]?>">
    <label for="contraA">Contraseña antigua</label>
    <input class="input" type="password" name="contraA" id="contraA">
    </div>
        <div>
    <label for="contra1">Contraseña Nueva</label>
    <input class="input" type="password" name="contra1" id="contra1">
    </div>
        <div>
    <label for="contra2">Repita la contraseña</label>
    <input class="input" type="password" name="contra2" id="contra2">
    </div>
        <div>
    <input class="Button" type="submit" value="Enviar" name="CambiarContraseña">
    <input class="Button" type="button" onclick="location='Layout.php?pagina=borrarC'" value="Borrar Usuario">
    </div>
</form>
    
    </div>
<button class="Button clear" onclick="location='./Layout.php?pagina=inicio'">Atras</button>


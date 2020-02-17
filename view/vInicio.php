<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Comprueba que existe el usuario
    if(!isset($_SESSION[USUARIOA])){
    header('Location: Layout.php');
    }
?>
<div id="botones">
<a  href="Layout.php?pagina=editar"><button class="Button">Editar perfil</button></a>
<a href="Layout.php?pagina=departamentos&buscar=departamentos"><button class="Button">Mantenimiento departamentos</button></a><br>
<a href="Layout.php?pagina=rest"><button class="Button">Rest</button></a><br>
<?php if($_SESSION["datos"][4]=="administrador"){
    ?>
<form action="../index.php?pagina=inicio" method="POST">
    <input class="Button" type="submit" name="mtoUsuarios2" value="mtoUsuarios">
</form>
        <?php
}
?>
</div>
<a href="../index.php?pagina=cerrar"><button class="Button">Salir</button></a><br>
<div class="texto">
    <?php

//Muestra los datos del usuario que ha iniciado sesion

    echo "Descripción usuario ".$_SESSION['datos'][0]."<br>";
    echo "Descripción usuario ".$_SESSION['datos'][1]."<br>";
    echo "Fecha ultima conexión ".$_SESSION['datos'][2]."<br>";
        echo "Numero de conexiones ".$_SESSION['datos'][3]."<br>";
    ?>
</div>



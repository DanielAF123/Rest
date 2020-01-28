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
<a href="Layout.php?pagina=editar"><button>Editar perfil</button></a>
<a href="../index.php?pagina=cerrar"><button>Salir</button></a><br>
<a href="Layout.php?pagina=rest"><button>Rest</button></a><br>
<?php
//Muestra los datos del usuario que ha iniciado sesion
    echo "Descripción usuario ".$_SESSION['datos'][0]."<br>";
    echo "Descripción usuario ".$_SESSION['datos'][1]."<br>";
    echo "Fecha ultima conexión ".$_SESSION['datos'][2]."<br>";
        echo "Numero de conexiones ".$_SESSION['datos'][3]."<br>";
    



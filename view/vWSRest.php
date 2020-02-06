<h1>Web Services REST</h1>
<h2>Utilización de WS REST Ajenos</h2>
<a href="https://data.europa.eu/euodp/es/developerscorner" target="_blank">Link de la api utlizada</a>
<p>Información el servicio:</p>
<!--<form action="../index.php?pagina=rest" method="POST">
    <label for="numero">Numero de ids</label>
    <input type="number" name="numero" id="numero">
    <input type="submit" value="IDS" name="ids"><br>
    <label>Respuesta</label>
    <p><?php/* if(isset($_SESSION["resultadoAPI"]["result"])){
    foreach ($_SESSION["resultadoAPI"]["result"] as $key => $value) {
        echo $value.","."\n"."<br>";
    }
    }*/
    ?></p>
</form>-->
    <p>ejemplos</p>
    <p>cordisH2020projects,dgt-translation-memory</p>
<form action="../index.php?pagina=rest" method="POST"> 
    <label for="codigo">Codigo para la busqueda</label>
    <input type="text" name="codigo" id="codigo">
    <input type="submit" value="Buscar" name="buscar">
    <?php 
        if(isset($_SESSION["resultadoAPI"]["html"])){
    echo $_SESSION["resultadoAPI"];
        }
    ?>
</form>
    <a href="../index.php?pagina=inicio"><button>Atras</button></a>
    <h3>WS REST Propio</h3>
    <form action="../index.php?pagina=rest" method="POST">
        <label for="codigo">codigo del departamento GET</label>
        <input type="text" name="codigo" id="codigo">
        <input type="submit" value="Buscar" name="bCodigo">
        <?php 
        if(isset($_SESSION["resultadoAPI"]["propio"])){
            echo $_SESSION["resultadoAPI"]["propio"];
        }
        ?>
    </form>
    <form action="../index.php?pagina=rest" method="POST">
        <label for="codigo">codigo del departamento POST</label>
        <input type="text" name="codigo" id="codigo">
        <input type="submit" value="Buscar" name="bCodigoP">
        <?php 
        if(isset($_SESSION["resultadoAPI"]["propioP"])){
            echo $_SESSION["resultadoAPI"]["propioP"];
        }
        ?>
    </form>



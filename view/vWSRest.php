<h1>Web Services REST</h1>
<h2>Utilización de WS REST Ajenos</h2>
<a href="https://data.europa.eu/euodp/es/developerscorner" target="_blank">Link de la api utlizada</a>
<p>Información el servicio:</p>
<form action="../index.php?pagina=rest" method="POST">
    <label for="numero">Numero de ids</label>
    <input type="number" name="numero" id="numero">
    <input type="submit" value="IDS" name="ids"><br>
    <label>Respuesta</label>
    <p><?php if(isset($_SESSION["resultadoAPI"]["result"])){
    foreach ($_SESSION["resultadoAPI"]["result"] as $key => $value) {
        echo $value.","."\n"."<br>";
    }
    }
    ?></p>
</form>
<form action="../index.php?pagina=rest" method="POST"> 
    <label for="codigo">Codigo para la busqueda</label>
    <input type="text" name="codigo" id="codigo">
    <input type="submit" value="Buscar" name="buscar">
    <?php 
    if(!isset($_SESSION["resultadoAPI"]["result"])){
        if(isset($_SESSION["resultadoAPI"])){
    echo $_SESSION["resultadoAPI"];
        }
    }?>
</form>
<a href="../index.php?pagina=inicio"><button>Atras</button></a>


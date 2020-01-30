<h1>Web Services REST</h1>
<h2>Utilización de WS REST Ajenos</h2>
<p>Información el servicio:</p>
<form action="../index.php?pagina=rest" method="POST">
    <!--<label>Parametros de entrada</label><br>
    <input type="text" name="nombre" id="nombre"><br>
    <input type="text" name="apellido" id="apellido"><br>-->
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
    echo $_SESSION["resultadoAPI"];
    }?>
</form>
<a href="../index.php?pagina=inicio"><button>Atras</button></a>


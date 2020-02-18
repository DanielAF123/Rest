<div id="or">
    <h1 class="tTexto">Web Services REST</h1>
<h2 class="tTexto">Utilización de WS REST Ajenos</h2>
<a href="../doc/UsoDelApiRest.pdf" target="_black">Uso del api rest</a>
<div id="or2">
<a class="texto" href="https://data.europa.eu/euodp/es/developerscorner" target="_blank">Link de la api utlizada</a>
<p class="texto" >Información el servicio:</p>
<form action="../index.php?pagina=rest" method="POST">
    <label for="numero">Numero de ids</label>
    <input class="input" type="number" name="numero" id="numero">
    <input class="Button" type="submit" value="IDS" name="ids"><br>
    <label>Respuesta</label>
    <p class="texto"><?php if(isset($_SESSION["resultadoAPI"]["result"])){
    foreach ($_SESSION["resultadoAPI"]["result"] as $key => $value) {
        echo $value.","."\n"."<br>";
    }
    }
    ?></p>
</form>
    
    <p class="texto">ejemplos</p>
    </div>
    <p class="texto">cordisH2020projects,dgt-translation-memory</p>
<form action="../index.php?pagina=rest" method="POST"> 
    <label for="codigo">Codigo para la busqueda</label>
    <input class="input" type="text" name="codigo" id="codigo">
    <input class="Button" type="submit" value="Buscar" name="buscar">
    <?php 
        if(isset($_SESSION["resultadoAPI"]["html"])){
    echo $_SESSION["resultadoAPI"]["html"];
        }
    ?>
</form>
    <button class="Button" onclick="location='./Layout.php?pagina=inicio'">Atras</button>
    <p class="texto">Direccion API PROPIA http://daw202.sauces.local/proyectoDWES/proyectoTema6/aplicacionRest/api/WSRestDepartamento.php</p>
    <h3 class="tTexto">WS REST Propio</h3>
    <form action="../index.php?pagina=rest" method="POST">
        <label for="codigo">codigo del departamento GET</label>
        <input class="input" type="text" name="codigo" id="codigo">
        <input class="Button" type="submit" value="Buscar" name="bCodigo">
        <?php 
        if(isset($_SESSION["resultadoAPI"]["propio"])){
            echo $_SESSION["resultadoAPI"]["propio"];
        }
        ?>
    </form>
    <form action="../index.php?pagina=rest" method="POST">
        <label for="codigo">codigo del departamento POST</label>
        <input class="input" type="text" name="codigo" id="codigo">
        <input class="Button" type="submit" value="Buscar" name="bCodigoP">
        <?php 
        if(isset($_SESSION["resultadoAPI"]["propioP"])){
            echo $_SESSION["resultadoAPI"]["propioP"];
        }
        ?>
    </form>
</div>


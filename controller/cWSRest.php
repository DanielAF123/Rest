<?php
if(!isset($_SESSION[USUARIOA])){
    header('Location: Layout.php');
}
if(isset($_REQUEST["calcular"])){
 $entrada=true;
 $aErrores=[];
}else{
    $entrada=false;
}
if($entrada){
    
}else{
    header("Location: ../index.php?pagina=Rest");
}
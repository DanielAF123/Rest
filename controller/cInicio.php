<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Comprueba que existe el usuario y lo redirecciona al inicio
    if(!isset($_SESSION[USUARIOA])){
    header('Location: view/Layout.php?pagina=inicio');
    }
if(isset($_REQUEST["mtoUsuarios2"])){
    $_SESSION["pagina"]="mtoUsuarios";
    header("Location: index.php");
}    

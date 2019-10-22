<?php 
session_start();
require_once "configBD.php";

if(isset($_SESSION['nomeDoUsuario'])){
    //LOGADO
}else{
    //Se não estiver logado, redirecionar para inder
    header("location: inder.php");
}
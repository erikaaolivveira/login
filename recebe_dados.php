<?php

print_r($_POST);
die(); //Morre

if (isset($_POST['action'])){
    if($_POST['action'] = 'cadastro'){
        //Teste se a ação é igual a cadastro
        echo "\n<p>cadastro</p>";
        echo "\n<pre>";
        print_r($_POST);
        echo"\n</pre>";


    }else if($_POST['action'] = 'login'){
        //Senão, teste se a ação é recuperar senha
        echo "\n<p>cadastro</p>";
        echo "\n<pre>";
        print_r($_POST);
        echo "\n</pre>";

    }else if($_POST ['action'] = 'senha'){
        //Senão, teste para recuperar a senha
        echo "\n<p>cadastro</p>";
        echo "\n<pre>";
        print_r($_POST);
        echo "\n</pre>";

    }else{
        echo"<h1>Alo Ha!</h1> <h2>Acesso negado</h2>";
    }
}else{
    header("location:index.php");
}
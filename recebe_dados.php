<?php
//Conexão com o banco de dados
require_once 'configDB.php';

function verificar_entrada($entrada){
    //Filtrando a entrada
    $saida = htmlspecialchars($entrada);
    $saida = stripslashes($saida);
    $saida = trim($saida);
    return $saida;//retorna a saida limpa
}

print_r($_POST);
die(); //Morre

if (isset($_POST['action'])){
    if($_POST['action'] = 'cadastro'){
        //Teste se a ação é igual a cadastro
        #echo "\n<p>cadastro</p>";
        #echo "\n<pre>";
        #print_r($_POST);
        #echo"\n</pre>";
        //Pegando dados do formulário
        $nomeCompleto = verificar_entrada($_POST['nomeCompleto']);
        $nomeDoUsuario = verificar_entrada($_POST['nomeDoUsuario']);
        $emailUsuario = verificar_entrada($_POST['emailUsuario']);
        $senhaDoUsuario = verificar_entrada($_POST['senhaDoUsuario']);
        $senhaUsuarioConfirmar = verificar_entrada($_POST['senhaUsuarioConfirmar']);
        $dataCriado = date("Y-m-d");//Data atual no formato banco de dados

        //Codificando as senhas
        $senhaCodifica = sha1($senhaDoUsuario);
        $senhaConfirmarCod = sha1($senhaUsuarioConfirmar);
        //Teste de captura de dados 
        #echo "<p>Nome Completo: $nomeCompleto</p>";
        #echo "<p>Nome de Usuário: $nomeDoUsuario</p>";
        #echo "<p>E-mail: $emailUsuario</p>";
        #echo "<p>Senha Codificada: $senhaCodificada</p>";
        #echo "<p>Data de criação: $dataCriado</p>";
        if($senhaCodificada!=$senhaConfirmarCod){
            echo"<p class='text-danger'>Senhas não conferem.</p>";
            exit();
        }else{
            //As senhas conferem,verificar se o usuário já
            //existe no banco de dados
            $sql = $connext->prepare("SELECT nomeDoUsuario, emailUsuario FROM usuario WHERE nomeDoUsuario = ? OR emailUsuario = ?");
            $sql-> bind_param("ss, $nomeDoUsuario, $emailUsuario");
            $sql-> execute();
            $resultado = $sql-> get_result();
            $linha = $resultado-> fetch_array(MYSQLI_ASSOC);

            //Verificando a existencia do usuário no banco
            if($linha['nomeDoUsuario'] == $nomeDoUsuario){
                echo"<p class='text-danger'>Usuário indisponível </p>";
            }elseif ($linha['emailUsuario'] == $emailUsuario) {
                echo "<p class='text-danger'> E-mail indisponível </p>;
            } else{
                //Usuario pode ser cadastrado no banco de dados
                $sql = $connect->prepare("INSERT into usuario (nomeDoUsuario, nomeCompleto, emailUsuario, senhaUsuario, dataCriado)
                values(?,?,?,?,?);
                $sql->bind_param("sssss , $nomeDoUsuario, nomeCompleto, ");
            }

            }

            }
        }
        

    }else if($_POST['action'] = 'login'){
        //Senão, teste se a ação é recuperar senha
        echo "\n<p>cadastro</p>";
        echo "\n<pre>":
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
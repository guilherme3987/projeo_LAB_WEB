<?php
    if(isset ($_POST['acao'])){
        $Email_login = $_POST['email'];
        $Pass = $_POST['pass'];

        //teste
        echo($Email_login.$Pass);
    }

    $host = "localhost";
    $banco = "formulario";
    $user = "root";
    $senha_user = "";

    $con = mysqli_connect($host,$banco,$user,$senha_user);

    if(!$con){
        echo ("Erro: ".mysqli_connect_error());
    }

    $sql = "INSERT INTO dados_login(login_user,email,senha) VALUES ('login_user'.'email'.'senha')";

    $rs = mysqli_query("$con,$sql");

    if($rs){
        echo("Dados cadastrados com sucesso");
    }

?>

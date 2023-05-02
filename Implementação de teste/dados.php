<?php
    if(isset ($_POST['acao'])){
        $email = $_POST['email'];
        $cell = $_POST['telefone'];
        $nome = $_POST['nome'];

        //teste 
        echo($email.$cell.$nome);
    }


    $host = "localhost";
    $banco = "formulario";
    $user = "root";
    $senha_user = "";


    $con = mysqli_connect($host,$banco,$user,$senha_user);

    if(!$con){
        echo ("Erro".mysqli_connect_error());
    }

    $sql = "INSERT INTO dados(nome,email,celular) VALUES ('$nome'.'$email'.'$cell')";

    $rs = mysqli_query("$con,$sql");

    if($rs){
        echo("Dados cadastrados com sucesso");
    }

?>
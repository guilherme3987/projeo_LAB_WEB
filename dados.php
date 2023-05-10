<?php
    
    // variaveis de conxeão
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "banco_teste";

    // conexão 
    $conn = new mysqli($servername, $username, $password, $dbname);


    // Pegando input do html
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["pass"];
    $cell = $_POST['telefone'];

    // Código SQL (inserir na tabela x os valores...)
    $sql = "INSERT INTO cadastro (nome,senha,email,telefone) VALUES ('$nome','$senha','$email','$cell')";

    // Teste de conexão do banco de dados
    if(!($conn -> connect_error) and ($conn ->query($sql) === TRUE)){
        // echo("Conexão com o banco de dados efetuada");
        header("Location: calculopag.html");
    }else{
        echo("Erro de acesso: ".$conn->connect_error);
    }

    http_response_code(200);

    $conn ->close();
        
?>
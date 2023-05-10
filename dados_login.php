<?php
    // Variáveis de conexão
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "banco_teste";

    // Conexão 
    $conn = new mysqli($servername,$username, $password,$dbname);

    // Pegando inputs 
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    // Comando SQL 
    $sql = "INSERT INTO login (email,senha) VALUES ('$email ','$pass')";
    
    // Teste de conexão com o banco de dados
    if(!( $conn ->connect_error) and ($conn ->query($sql) === TRUE)){
        echo("Conexão com o banco de dados efetuada");
    }else{
        echo("Erro de acesso: ".$conn->connect_error);
    }

    http_response_code(200);

    $conn ->close();

?>

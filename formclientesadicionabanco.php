<?php

    $nome = $_POST["txtnome"];
    $desc = $_POST["txtendereco"];
    $cat  = $_POST["cat"];

    echo "$nome - $desc - $cat";

    $sql = "insert into filmes (nome, descricao, categoria_id) values('$nome', '$desc', '$cat');";

    
    include('dados-banco.php');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    echo("Connection failed: " . mysqli_connect_error());
}


if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Adicionado com sucesso ao banco de dados!');</script>";
        header("refresh:1;filmes.php");
        
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
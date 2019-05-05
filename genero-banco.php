<?php

    $nome = $_POST["txtnome"];

    echo "$nome";

    $sql = "insert into categorias(nome) values('$nome');";

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
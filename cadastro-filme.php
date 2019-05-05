<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="filmes.php" class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="filmes.php">Filmes <span class="sr-only">(current)</span></a>
        <li class="nav-item active">
            <a class="nav-link" href="cadastro-filme.php">Cadastro de filmes <span class="sr-only">(current)</span></a>
        <li class="nav-item active">
            <a class="nav-link" href="cadastro-genero.php">Cadastro de Generos <span class="sr-only">(current)</span></a>
        </ul>
    </div>
    </nav>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="formclientesadicionabanco.php">
                <input type="hidden" class="form-control" id="txtcodigo"  placeholder="Digite o código" 
                    name="txtcodigo"  value="<?=$id?>">
                
                <div class="form-group">
                    <label for="txtnome">Nome do filme</label>
                    <input type="text" class="form-control" id="txtnome" placeholder="Digite o nome"
                    name="txtnome">
                </div>
                <div class="form-group">
                    <label for="txtendereco">Descrição do filme</label>
                    <input type="text" class="form-control" id="txtendereco" placeholder="Digite a descrição"
                    name="txtendereco">
                </div>
				
				<?php

					$servername = "localhost";
					$username = "root";
                    $password = "root";
                    $database = "bancofilmes2";

                    $conn = mysqli_connect($servername, $username, $password, $database);
                    
                    if (!$conn) {
                        echo("Connection failed: " . mysqli_connect_error());
                    }
                    
                    $sql = "select * from categorias;";

                    $result = mysqli_query($conn, $sql);
                    
                    //if (mysqli_num_rows($result > 0)) {
                        echo('<select id="cat" name="cat">');
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $row['id'] . '">' . $row['nome'] . '</option>';
                            
                        }
                        echo '</select>';
                    //} else {
                    //    echo "<option>Nenhuma categoria cadastrada</option>";
                    //}

                    mysqli_close($conn);
                    
				?>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>


        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

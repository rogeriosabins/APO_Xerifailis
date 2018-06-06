<?php

  session_start();


?>





<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Cadastro</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">

                    <a class="navbar-brand" href="#">Navbar</a>

                
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                            <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav ml-auto ">
                            <li class="nav-item">
                                <a class="nav-link" href="sair.php">sair</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="user_secao.php">home</a>
                            </li>
                    </div>
            
        </div>

    </nav>
    <div class="wrapper pt-4 px-4">
      <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
        
          <h3>Sala nome:</h3>
        
        </div>
        <div class="col-md-3">
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, voluptatum? Maxime corporis autem veniam doloremque!</p>
        </div>
        <div class="col-md-6 border">

          <h3>arquivos:</h3>
        </div>
        <div class="col-md-3">
          <h3>coloque um arquivo:</h3>
          <a href="upload_arquivo.php"><button>upload</button></a>
        </div>
      </div>
      <div class="wrapper pt-4 px-4">
          <h3>Fórum:</h3>
          <div class="wrapper border">
            <a href="#"><p>topico 1</p></a>
            <a href="#"><p>topico 1</p></a>
          </div>
          <div class="botao pt-4 " align="center">
            <a href="#"><button class="btn btn-primary">Criar Tópico</button></a>
          </div>
      </div>
    </div>
    
    
    
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
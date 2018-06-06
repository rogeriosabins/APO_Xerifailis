<?php

  session_start();


?>





<!doctype html>
<html lang="en">
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
                    </div>
            
        </div>

    </nav>
    
    <div class="wrapper px-4">
      <div class="row mt-4">
        <div class="col-md-3">
          <div class="perfil border">
            <h3>Usuario</h3>
            <div class="border">
              <a href="perfil.php"><p>Perfil</p></a>
              <a href="criar_sala.php"><p>Criar sala</p></a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <h3>Suas salas:</h3>
          <div class="pt-4">
            <a href="sala.php"><p>sala 1</p></a>
            <a href="sala_sem_forum.php"><p>sala sem fórum</p></a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="search-bar">
            <form action="#" method="get">
              <input type="search" name="procura_perfil" id="procura_perfil">
              <button type="search">procurar</button>
            </form>
          </div>
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
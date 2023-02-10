<?php

include 'config.php';

session_start();

if(!isset ($_SESSION['user_id'])){
    header('location:login.php');
}

?>

    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/home.css">
    <title>Home</title>
</head>
<body>
    <header>
        <nav class="navigation">
            <a href="#" class="logo"><img src="assets/imagens/logo.png" alt="" class="logo-img"></a>
            <ul class="nav-menu">
                <a href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill-x" color="black" viewBox="0 0 16 16">
  <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708Z"/>
</svg></a>               
                <i class='bx bx-search'></i>
            </ul>
            <div class="menu">
                <span class="bar"></span>
                <span  class="bar"></span>
                <span  class="bar"></span>
            </div>
        </nav>
    </header>
    <main>
        <section class="home">
            <div class="home-text">
                <h4 class="text-h4">Bem Vindo ao FullRegistron</h4>
                <h1 class="text-h1">A empresa diferenciada</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Voluptate odio quo ea, at quae rem ullam deserunt, maxime
                doloribus recusandae natus placeat consequuntur numquam cum odit saepe? Doloribus, reiciendis maiores.</p>
                <a href="#" class="home-btn">Confira</a>

            </div>
            <div class="home-img">
                <img src="assets/imagens/imagem.png" alt="">
            </div>
        </section>
    </main>

    <div class="row">
        <div class="card verde">
            <h2>Controle</h2>
            <p>Confira o controle</p>
            <img src="assets/imagens/verde.png" alt="figura 1" class="image">
        </div>

        <div class="card azul">
            <h2>Beneficios</h2>
            <p>Confira o beneficios</p>
            <img src="assets/imagens/azul.png" alt="figura 2" class="image">
        </div>

        <div class="card vermelho">
            <h2>Gestão</h2>
            <p>Confira nossa gestão</p>
            <img src="assets/imagens/vermelho.png" alt="figura 2" class="image">
        </div>
    </div>
        
    <div>
      <?php
      include_once('grafico.php');
      include_once('grafico2.php');
       ?>
    </div>
  <body>
</html>
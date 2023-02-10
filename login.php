<?php

@include 'config.php';

session_start();

 if(isset($_POST['submit'])) {
   
   $email = mysqli_real_escape_string( $conn, $_POST['email']);
   $senha = mysqli_real_escape_string( $conn, $_POST['senha']);

    $select_usuario =  "SELECT * FROM usuarios WHERE email='$email' && senha = '$senha'";

    $result = mysqli_query($conn, $select_usuario);

   if (mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_assoc($result);

      if ($row['tipo_usuario'] == 'admin') {

         $_SESSION['admin_id'] = $row['id'];
         header('location:page-admin.php');

      } elseif ($row['tipo_usuario'] == 'user') {

         $_SESSION['user_id'] = $row['id'];
         header('location:home.php');

      }
      
   }else{
      $mensagem[] = 'Email ou senha incorreta';
   }
};

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>
<body>

    <div class="login">
        <form action="" method="post">

        <?php
    if(isset($mensagem)){
      foreach($mensagem as $mensagem){
      echo '<span class="mensagem">' .$mensagem. '</span>';
   }
}
    ?>

        <div class="teste"><img src="assets/imagens/logo.png"></div>
        <div class="tela">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="submit" name="submit" value="login" class="botao"></button>
            <br><br>
            <a href="cadastro.php">Cadastre-se</a>
         </div>
        </form>
    </div>
</body>
</html>
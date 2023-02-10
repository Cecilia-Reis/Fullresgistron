<?php

@include 'config.php';

 if(isset($_POST['submit'])) {

   $nome = mysqli_real_escape_string($conn, $_POST['nome']);
   $email = mysqli_real_escape_string( $conn, $_POST['email']);
   $senha = mysqli_real_escape_string( $conn, $_POST['senha']);
   $csenha = mysqli_real_escape_string( $conn,$_POST['csenha']);
   $tipo_usuario = $_POST['tipo_usuario'];
    echo trim($email, $senha);
    $select_usuario =  "SELECT * FROM usuarios WHERE email='$email' && senha='$senha'";

    $result = mysqli_query($conn, $select_usuario);

    if(mysqli_num_rows($result) > 0) {

        $mensagem[] = 'Este usuário ja existe !';
    } else{
        if($senha != $csenha){
            $mensagem[] = 'Confirme sua senha';
        } else{
          $insert = "INSERT INTO usuarios (nome, email, senha, tipo_usuario) VALUES('$nome', '$email', '$senha', '$tipo_usuario')";
            mysqli_query($conn, $insert);
        
            header('location:login.php');
        }
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
    <link rel="stylesheet" href="assets/css/form.css">

    <title>Cadastro</title>
</head>
<body>

<?php
    if(isset($mensagem)){
   foreach($mensagem as $mensagem){
      echo '<span class="mensagem">'.$mensagem.'</span>';
   }
}
    ?>


    <div class="container">
        <div class="imagem"><img src="assets/imagens/logo.png" alt="logo"></div>

        <form action="" method="post" class="form">

            <label for="nome">Nome</label>
            <input type="text" name="nome" required >
           
            <label for="nome">E-mail</label>
            <input type="email" name="email"  required>

           <label for="nome">Senha</label>
            <input type="password" name="senha" required>
            
            <label for="nome">Confirmar Senha</label>
            <input type="password" name="csenha" required>
            
            <select name="tipo_usuario">
            <option value="user">Usuário</option>
            <option value="admin">Administrador</option>
            </select>

            <input type="submit" name="submit" value="Cadastre-se" class="botao">
            <br><br>
        </form>
    </div>
</body>
</html>
<?php

if (!empty($_GET['id'])){

    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id" ;

    $result = $conn->query($sqlSelect);

    if($result->num_rows > 0)
    {   
        while($user_data = mysqli_fetch_assoc($result)){
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];
            $csenha =  $user_data['senha'];
            $tipo_usuario = $user_data['tipo_usuario'];
        }    

    }else{
        header('location:admin/page-admin.php');
    }

}

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
    if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
    ?>

    <div class="container">
        <div class="imagem"><img src="assets/imagens/logo.png" alt="logo"></div>

        <form  action="save-edit.php" method="post" class="form">

            <label for="nome">Nome</label>
            <input type="text" name="nome" value="<?php echo $nome ?>" required >
           
            <label for="nome">E-mail</label>
            <input type="email" name="email" value="<?php echo $email ?>"   required>

           <label for="nome">Senha</label>
            <input type="password" name="senha" value="<?php echo $senha?>"  required>
            
            <label for="nome">Confirmar Senha</label>
            <input type="password" name="csenha" value="<?php echo $senha ?>"  required>
            
            <select name="tipo_usuario">
            <option value="user">User</option>
            <option value="admin">Admin</option>
            </select>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="submit" id="update" name="update" value="Atualizar" class="botao">
            <br>
        </form>
    </div>
</body>
</html>
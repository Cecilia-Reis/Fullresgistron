<?php

if (!empty($_GET['id'])) {

    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) 
    {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $setor = $user_data['setor'];
            $cargo = $user_data['cargo'];
        }

    }else{
        header('location:tabela.php');
    }
   
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/form.css">

    <title>Formulário</title>
</head>
<body>
    <div class="box">
        <form action="save-edit.php" method="POST">
            <fieldset>
                <br><br>
                 <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputuser" value="<?php echo $nome?>" required>
                    <br><br> <br><br>
                </div>

                <div class="inputBox">
                     <input type="email" name="email" id="email" class="inputuser" value="<?php echo $email?>" required >
              
                    <br><br><br>
                </div>
                    <br>
              
                <div class="div-select">
                    <p>Setor</p>
                    <br>
                    <select name="setor" >
                        <option value="">Selecione seu setor</option>
                        <?php
						$result_setor = "SELECT * FROM setor";
						$resultado_setor = mysqli_query($conexao, $result_setor);
						while($row_setor = mysqli_fetch_assoc($resultado_setor)){ ?>
							<option value="<?php echo $row_setor['id']; ?>"><?php echo $row_setor['nome']; ?>
                        </option> 
                    <?php
						}
					?>                     
                    </select>
                </div>
                <br><br><br>

                <div class="inputBox">
                    <input type="text" name="cargo" id="cargo" class="inputuser"  value="<?php echo $cargo?>" required>
                   
                    <br></br>
                </div>
                <br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                 <input type="submit" name="update" id="update "value="Atualizar" class="enviar">  
                 
                 <img src="imagens/logo.png">
                 
            </fieldset>
        </form>
    </div>
</body>
</html>
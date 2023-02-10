<?php

    include_once('config.php');

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
        <form action="tabela.php" method="POST">
            <fieldset>
                <br><br>
                 <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputuser" required placeholder="Nome Completo">
                    <br><br> <br><br>
                </div>

                <div class="inputBox">
                     <input type="email" name="email" id="email" class="inputuser" required placeholder="E-mail">
              
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
							<option value="<?php echo $row_setor['id']; ?>"><?php echo $row_setor['nome']; ?></option> 
                    <?php
						}
					?>

                    <?php
                     $nome = $_POST['nome'];
                     $email = $_POST['email'];
                     $setor = $_POST['setor'];
                     $cargo = $_POST['cargo'];
                 
                 
                     $result_usuario = mysqli_query($conexao,"INSERT INTO usuarios(nome,email,setor,cargo) VALUES('$nome','$email','$setor','$cargo')");
                    
                    ?>
                
                    </select>
                </div>
                <br><br><br>

                <div class="inputBox">
                    <input type="text" name="cargo" id="cargo" class="inputuser" required placeholder="Cargo">
                   
                    <br></br>
                </div>
                <br>
                 <input type="submit" name="submit" value="Enviar" class="enviar">  
                 
                 <img src="imagens/logo.png">
                 
            </fieldset>
        </form>
    </div>
</body>
</html>
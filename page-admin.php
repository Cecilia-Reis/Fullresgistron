<?php

include 'config.php';

session_start();

if(!isset ($_SESSION['admin_id'])){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Painel de Controle</title>
</head>
<body>
<header>
        <nav class="navigation">
            <a href="#" class="logo"><img src="assets/imagens/logo2.png" alt="" class="logo-img"></a>
            <ul class="nav-menu">
                               
                <a href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill-x" color="black" viewBox="0 0 16 16">
  <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708Z"/>
</svg></a> 
            </ul>
            <div class="menu">
                <span class="bar"></span>
                <span  class="bar"></span>
                <span  class="bar"></span>
            </div>
        </nav>
    </header>

  <main>
        <div>
      <?php

        $sql = "SELECT * FROM usuarios ORDER BY id ASC";

        $result = $conn->query($sql);
      ?>
          
       
            <table class="tabela header-fixed">
                <thead>
       
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Tipo Usuário</th>
                    <th>Edição</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    while($user_data = mysqli_fetch_assoc($result)) 
                    {
                        echo "<tr>";
                        echo  "<td>".$user_data['id']. "</td>";
                        echo  "<td>".$user_data['nome']. "</td>"; 
                        echo  "<td>".$user_data['email']. "</td>"; 
                        echo  "<td>".$user_data['tipo_usuario']. "</td>";
                        echo "<td> 
                      <button  class='editar'><a href='edit-admin.php?id=$user_data[id]'>
                      <svg xmlns='http://www.w3.org/2000/svg' width='17' height='17' fill='currentColor' class='bi bi-pen'color='white' viewBox='0 0 16 16'>
                        <path d='m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z'/>
                        </svg>
                    </button></a>
                        
                      <button  class='deleta'><a href='delete.php?id=$user_data[id]'>
                      <svg xmlns='http://www.w3.org/2000/svg' width='17' height='17' fill='currentColor' class='bi bi-trash3' color='white' viewBox='0 0 16 16'>
                      <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/>
                    </svg>
                        </button></a>
                        </td>";
                      echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
    
</html>
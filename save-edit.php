<?php

include_once('config.php');

if(isset($_POST['update'])) {

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tipo_usuario = $_POST['tipo_usuario'];


    $sqlUpdate = "UPDATE usuarios SET nome='$nome', email='$email', tipo_usuario = '$tipo_usuario' WHERE id ='$id'";

    $result = $conn->query($sqlUpdate); 

    header('location:page-admin.php');

} 

?>
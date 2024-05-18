<?php
    include("includes/connection.php"); // Conecta ao banco de dados.
    include("includes/protect.php"); // Conecta ao banco de dados.
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];   
    $id = $_POST['id'];
    $sql_code = "UPDATE usuario SET NOME='$nome', SENHA='$senha' WHERE IDUSUARIO=$id";
    mysqli_query($connection, $sql_code);


    header('Location: usuarios.php');
    die();
?>
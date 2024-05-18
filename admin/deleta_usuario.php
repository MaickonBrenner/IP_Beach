<?php
    include("includes/connection.php"); // Conecta ao banco de dados.
    include("includes/protect.php"); // Conecta ao banco de dados.
   
    $id = $_POST['id'];
    $sql_code = "DELETE FROM usuario WHERE IDUSUARIO=$id";
    mysqli_query($connection, $sql_code);

    header('Location: usuarios.php');
    die();
?>
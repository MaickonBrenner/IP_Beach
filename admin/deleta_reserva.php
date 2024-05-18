<?php
    include("includes/connection.php"); // Conecta ao banco de dados.
    include("includes/protect.php"); // Conecta ao banco de dados.
   
    $id = $_POST['id'];
    $sql_code = "DELETE FROM reserva WHERE IDRESERVA=$id";
    mysqli_query($connection, $sql_code);

    header('Location: reservas.php');
    die();
?>
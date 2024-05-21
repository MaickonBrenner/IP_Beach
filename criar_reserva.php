<?php
        include("admin/includes/connection.php"); // Conecta ao banco de dados.

        $nome = $_POST['tipo_nome'];
        $email = $_POST['tipo_email'];
        $telefone = $_POST['tipo_telefone'];
        $DATAAGENDAda = $_POST['data'];
        $hora = $_POST['hora'];
        $sql_code = "INSERT INTO reserva VALUES(NULL, '$nome ', '$email', '$telefone', now() ,'$DATAAGENDAda', '$hora')";
        mysqli_query($connection, $sql_code);
        echo $connection->error;
        header('Location: feedback.html');
?>
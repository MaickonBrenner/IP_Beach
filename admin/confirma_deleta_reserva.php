<?php

    include("includes/connection.php"); // Conecta ao banco de dados.
    include("includes/protect.php"); // Conecta ao banco de dados.

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }  
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>IP Beach Admin - login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body style="display: flex; align-items: center; justify-content: center;">

    <div action="valida_edita_usuario.php" method="post" class="card" style=" width: 80%; max-width: 500px; background-color: white; padding: 20px; border-radius: 10px;">
        <h1>Deletar Usuário</h1>
        <h3>Deseja mesmo deletar a seguinte reserva?</h3>
        <?php 
            $id = $_POST['id'];
            $query = "SELECT * FROM reserva WHERE IDRESERVA = $id";
            $result = $connection->query($query);
            while($row = $result->fetch_assoc()) {
                $text_nome = $row['NOME'];
                $text_email = $row['EMAIL'];
                $text_telefone = $row['TELEFONE'];
                $text_dataagen = $row['DATAAGENDAMENTO'];
                $text_dataagendada = $row['DATAAGENDADA'];
                $text_hora = $row['HORA'];


                
            }
            echo "<h5>Nome: $text_nome</h5>";
            echo "<h5>Email: $text_email</h5>";
            echo "<h5>Telefone: $text_telefone</h5>";
            echo "<h5>Data agendada: $text_dataagen</h5>";
            echo "<h5>Data agendamento: $text_dataagendada</h5>";
            echo "<h5>Hora agendada: $text_hora</h5>";
        ?>
        <div class="options">
            <?php echo "<form action='deleta_reserva.php' method='post'><button name='id' value='$id' class='btn btn-primary'>Sim</button></form>"; ?>
            <a href="usuarios.php" class="btn btn-primary">Não</a>
        </div>

        </div>
    <!-- <a href="usuarios.php">cmd</a> -->

</body>
</html>
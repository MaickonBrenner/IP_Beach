<?php

    include("includes/connection.php"); // Conecta ao banco de dados.
    include("includes/protect.php"); // Conecta ao banco de dados.

    if(isset($_POST['usuario']) && isset($_POST['senha'])) { // verifica se existe variável de login.

        if(!isset($_SESSION)) { // Cria variáveis de sessão.
            session_start();
        }

        // Segurança
        $_SESSION['usuario'] = $connection->escape_string($_POST['usuario']);
        $_SESSION['senha'] = $_POST['senha'];

        $sql_code = "SELECT * FROM usuario WHERE NOME = '" . $_SESSION['usuario'] .  "'";
        $sql_query = $connection->query($sql_code);

        if($sql_query->num_rows == 0) {
            $nome = $_POST['usuario'];
            $senha = $_POST['senha'];
            $sql_code = "INSERT INTO usuario VALUES(NULL, '$nome ', '$senha', now())";
            mysqli_query($connection, $sql_code);
            
            header('Location: usuarios.php');
            die();
        } else {
            header('Location: registro_usuario.php?reg=error-cred'); 
        }


    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>IP Beach Admin - Registro usuario</title>

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

    <form action="registro_usuario.php" method="post" class="card" style=" width: 80%; max-width: 500px; background-color: white; padding: 20px; border-radius: 10px;">
        <h1>Registro
            <?php 
                if (isset($_GET['reg']) and $_GET['reg'] == 'error-cred') { echo '<span style="color: var(--error);font-size: 1rem;"> Usuario já existe!</span>'; }       
                ?></h1>
        <h3>Nome</h3>
        <input name="usuario" class="form-control form-control-sm" type="text" placeholder="Digite o usuário" aria-label=".form-control-sm example" style="margin-bottom: 20px;" required>
        <h3>Senha</h3>
        <input name="senha" class="form-control form-control-sm" type="password" placeholder="Digite a senha" aria-label=".form-control-sm example" style="margin-bottom: 20px;" required>
        <button class="btn btn-primary">Criar usuario</button>
    </form>

</body>
</html>
<?php
echo "<pre>";
echo print_r($_POST);
echo "</pre>"; 
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

    <form action="index.php" method="post" class="card" style=" width: 80%; max-width: 500px; background-color: white; padding: 20px; border-radius: 10px;">
        <h1>Editar reserva</h1>
        <h3>Nome de usuário</h3>
        <input name="usuario" class="form-control form-control-sm" type="text" placeholder="Digite o usuário" aria-label=".form-control-sm example" style="margin-bottom: 20px;">
        <h3>Email</h3>
        <input name="email" class="form-control form-control-sm" type="email" placeholder="Digite o email" aria-label=".form-control-sm example" style="margin-bottom: 20px;">
        <h3>telefone</h3>
        <input name="telefone" class="form-control form-control-sm" type="tel" placeholder="Digite o telefone" aria-label=".form-control-sm example" style="margin-bottom: 20px;">
        <h3>Data do agendamento</h3>
        <input name="data" class="form-control form-control-sm" type="date" placeholder="Digite a data do agendamento" aria-label=".form-control-sm example" style="margin-bottom: 20px;">
        <h3>Data agendada</h3>
        <input name="dataagendada" class="form-control form-control-sm" type="date" placeholder="Digite a agendada" aria-label=".form-control-sm example" style="margin-bottom: 20px;">
        <h3>Hora agendada</h3>
        <input name="dataagendada" class="form-control form-control-sm" type="text" placeholder="Digite a hora agendada" aria-label=".form-control-sm example" style="margin-bottom: 20px;">
        
        <button class="btn btn-primary">Entrar</button>
    </form>
    <!-- <a href="usuarios.php">cmd</a> -->

</body>
</html>
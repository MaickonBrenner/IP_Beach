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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

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

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">IP Beach Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="usuarios.php"><i class="fa fa-fw fa-user"></i> Usuários</a>
                    </li>
                    <li>
                        <a href="reservas.php"><i class="fa fa-fw fa-bar-chart-o"></i> Reservas</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->  
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Controle de usuários
                            <small>Gerenciador</small>
                        </h1>
                        <ol class="breadcrumb">
                    
                            <li class="active">
                                <i class="fa fa-user"></i> Usuários
                            </li>
                        </ol>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        
                        <h2 class="h3">Tabela de usuários cadastrados  <a href="registro_usuario.php" class="btn btn-primary">Cadastrar usuario</a></h2>
                        


                        <div class="table-wrapper">
                            <table class='table table-bordered table-dark'>
                                <thead> 
                                    <tr>
                                        <th scope='col'>ID</th>
                                        <th scope='col'>Nome</th>
                                        <th scope='col'>Senha</th>
                                        <th scope='col'>Data de criação</th>
                                        <th scope='col'>ações</th>
                                    </tr>
                                </thead>

                            <?php 
                                $query = "SELECT * FROM usuario";
                                $result = $connection->query($query);

                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        $id_cel = $row['IDUSUARIO'];
                                        echo "<tr>
                                                <td>".$row['IDUSUARIO']."</td>
                                                <td>".$row['NOME']."</td>
                                                <td>".$row['SENHA']."</td>
                                                <td>".$row['DATADECRIACAO']."</td>
                                                <td><form action='confirma_deleta_usuario.php' method='post'><button name='id' value='$id_cel' class='btn'><i class='fa fa-trash'></i></button></form></i> <form action='edita_usuario.php' method='post'><button name='id' value='$id_cel' class='btn'><i class='fa fa-pencil'></i></button></form></td>

                                            </tr>";
                                    }

                                }

                            ?>
                            
                            </table>
                        </div>
                        
                    </div>
                </div>

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

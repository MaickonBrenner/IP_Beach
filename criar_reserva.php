<?php
        include("admin/includes/connection.php"); // Conecta ao banco de dados.

        if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
        } 

        if(isset($_POST["tipo_nome"]) && $_POST["tipo_email"] && $_POST["tipo_telefone"]) {

        }
        if(!comparaData($_POST["data"])) {
                header('Location: reserva.php?date=error-date&nome='. $_POST["tipo_nome"] .'&email='. $_POST["tipo_email"] . '&telefone=' . $telefoneas = $_POST["tipo_telefone"] . '');
                die();
        } 
        $query = "SELECT * FROM reserva WHERE DATAAGENDADA = '" . $_POST['data'] . "'";
        $result = $connection->query($query);

        if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                        if(strval($row['HORA']) == $_POST['hora']) {
                                header('Location: reserva.php?date=error-date-res&nome='. $_POST["tipo_nome"] .'&email='. $_POST["tipo_email"] . '&telefone=' . $telefoneas = $_POST["tipo_telefone"] . '');
                                die();
                        }
                }
        }

        $nome = $_POST['tipo_nome'];
        $email = $_POST['tipo_email'];
        $telefone = $_POST['tipo_telefone'];
        $DATAAGENDAda = $_POST['data'];
        $hora = $_POST['hora'];
        $sql_code = "INSERT INTO reserva VALUES(NULL, '$nome ', '$email', '$telefone', now() ,'$DATAAGENDAda', '$hora')";
        mysqli_query($connection, $sql_code);
        echo $connection->error;
        header('Location: feedback.html');

        function comparaData($data) {
                // Cria um objeto DateTime a partir da data recebida
                $dataRecebida = DateTime::createFromFormat('Y-m-d', $data);
            
                // Verifica se a data recebida é válida
                if (!$dataRecebida) {
                    return false; // Retorna false se a data for inválida
                }
            
                // Obtém o objeto DateTime da data atual
                $dataAtual = new DateTime();
                // Compara as datas
                if ($dataRecebida > $dataAtual) {
                    return true;
                } else {
                    return false;
                }
        }
?>
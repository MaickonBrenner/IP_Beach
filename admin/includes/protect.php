<?php

    if(!isset($_SESSION)) {
        session_start();
    }
    if(!isset($_SESSION['usuario_status']) || ($_SESSION['usuario_status'] != 'conectado')) {
        header('Location: index.php?login=error-no-login');
    }
        
?>
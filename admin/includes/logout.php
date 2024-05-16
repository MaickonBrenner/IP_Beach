<?php

    session_start();
    unset($_SESSION['usuario_status']);
    header('Location: ../index.php');

?>
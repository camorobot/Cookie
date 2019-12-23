<?php
    session_start();
    if (isset($_SESSION['test1']) && $_SESSION['test1'] == true) {
        
    } else{
        header('location: /');
    }
?>

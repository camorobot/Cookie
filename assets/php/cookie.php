<?php
    session_start();
    $_SESSION['test1'] = true;
    header("location: /");
?>

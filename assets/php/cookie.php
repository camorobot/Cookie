<?php
    session_start();
    $redirecturl = $_POST['homeurl'];
    $_SESSION['test1'] = true;
    header("location: $redirecturl");
?>

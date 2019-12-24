<?php
    session_start();
    $redirecturl = $_POST['homeurl'];
    $path = 'assets/php/cookie.php';
    header("location: $redirecturl".$path);
?>

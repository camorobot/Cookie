<?php
	session_start();
    unset($_SESSION['tracking']);
	header("location: /");
?>

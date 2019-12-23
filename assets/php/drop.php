<?php
	session_start();
	unset($_SESSION['test1']);
	header("location: /");
?>

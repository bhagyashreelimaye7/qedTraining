<?php
//require("Security.php");
	session_start();
	session_unset();
	session_destroy();
	
	header("Location:qedLoginForm.php");
?>


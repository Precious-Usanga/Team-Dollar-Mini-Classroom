<?php
session_start();

	$_SESSION["id"] = 1;
	$_SESSION["name"] = "Teacher One";
	$_SESSION["email"] = "root@localhost.com";

header("location:../dashboard.php");
?>
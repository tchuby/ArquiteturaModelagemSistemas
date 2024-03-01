<?php
session_start();

$login = "pepe";
$senha = "123";

if($_POST["login"] == $login &&
	$_POST["pass"] == $senha){
		
	$_SESSION["auth"] = true;
	$_SESSION["name"] = "Joselito";
	header("Location: index.php"); 
}
else{
	header("Location: login.php");
}
?>
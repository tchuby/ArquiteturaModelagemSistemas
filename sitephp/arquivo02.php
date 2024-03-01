<?php
session_start();

if($_SESSION["auth"] == true){
	echo $_SESSION["name"]." está autenticado";
}else{
	echo "Não autenticado";
}

?>
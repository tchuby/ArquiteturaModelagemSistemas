<?php
session_start();
session_destroy(); #limpar dados da sessão $_SESSION = null
header("Location: login.php");
?>
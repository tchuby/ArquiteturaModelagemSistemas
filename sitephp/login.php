<?php
session_start();
?>
<form method="post" action="efetuaLogin.php">
	<label>Login</label>
	<input type="text" name="login">
	<label>Senha</label>
	<input type="password" name="pass">
	<input type="submit" value="Entrar">
</form>